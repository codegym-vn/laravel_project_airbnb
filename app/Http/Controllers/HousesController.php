<?php

namespace App\Http\Controllers;

use App\Model\HousesModel;
use App\Model\KindEvaluateModel;
use App\User;
use Illuminate\Http\Request;

class HousesController extends RetrievesllDataController
{
    public function showHouses(Request $request)
    {
        $address = $this->address();
        $houses = HousesModel::orderBy('id', 'desc')->paginate(10, ['*'], 'trang');
        return view('index.list-bock-house', compact('houses', 'address'));
    }

    public function seeDetails($id)
    {
        $Comments = KindEvaluateModel::where('id_house',$id)->get();

        $seeDetailHouses = HousesModel::find($id);

        $user = $this->user($seeDetailHouses->id_user);
        $priceHouses = HousesModel::where('price', $seeDetailHouses->price)->get();
        $address = $this->address();
        return view('index.information-house', compact('seeDetailHouses', 'user', 'priceHouses', 'address' , 'Comments'));
    }

    public function search(Request $request)
    {
        $address = $this->address();

        if ($request->price != 0 | $request->price != null) {
            $price = explode('-', $request->price);
        }

        if (isset($price)) {
            $houses = HousesModel::whereBetween('price', [$price[0], $price[1]])
                ->orWhere('id_address', "LIKE", "%".$request->address."%")
                ->orWhere('number_room', 'LIKE', "%".$request->number_room."%")
                ->orWhere('number_bathroom', 'LIKE', "%".$request->number_bathroom."%")
                ->orWhere('month', "LIKE", "%".$request->month."%")
                ->get();
        } else {
            $houses = HousesModel::where('id_address', "LIKE", "%$request->address%")
                ->orWhere('number_room', 'LIKE', "%$request->number_room%")
                ->orWhere('number_bathroom', 'LIKE', "%$request->number_bathroom%")
                ->orWhere('month', "LIKE", "%$request->month%")
                ->get();
        }
        return view('index.search', compact('houses', 'address'));

    }

    public function showUpdatedHomeStatus($id)
    {
        $houses = HousesModel::where('id_user', $id)->get();
        $user = User::find($id);
        return view('collection.userPostHouse.show-updated-home-status', compact('houses', 'user'));
    }

    public function updatedHomeStatus(Request $request)
    {
        $id = $request->nameHouse;
        $status = $request->status;
        $updateHouseStatus = HousesModel::find($id);
        $updateHouseStatus->status = $status;
        $updateHouseStatus->save();

        $user = User::find($updateHouseStatus->id_user);
        $request->session()->flash('updateHouses', 'Bạn dã cập nhật trạng thái nhà thành công');
        return redirect(route('showUpdatedHomeStatus', "$user->id"));
    }

    public function showHouse()
    {
        $houses = HousesModel::all();

        return view('collection.userPostHouse.dashboard', compact('houses'));
    }

}
