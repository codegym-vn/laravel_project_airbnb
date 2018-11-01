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
        $houses = HousesModel::orderBy('status', 'desc')->paginate(10, ['*'], 'trang');
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

        if ($price) {
            $houses = HousesModel::orWhereBetween('price', [$price[0], $price[1]])
                ->orWhere('id_address', "like", "%$request->address")
                ->orWhere('number_room', 'like', "%$request->number_room%")
                ->orWhere('number_bathroom', 'like', "%$request->number_bathroom%")
                ->orWhere('month', "like", "%$request->month%")
                ->get();
        } else {
            $houses = HousesModel::where('id_address', "like", "%$request->address")
                ->orWhere('number_room', 'like', "%$request->number_room%")
                ->orWhere('number_bathroom', 'like', "%$request->number_bathroom%")
                ->orWhere('month', "like", "%$request->month%")
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
    }

    public function showHouse()
    {
        $houses = HousesModel::all();

        return view('collection.userPostHouse.dashboard', compact('houses'));
    }

}
