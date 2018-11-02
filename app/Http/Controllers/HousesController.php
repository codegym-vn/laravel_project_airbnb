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
        $Comments = KindEvaluateModel::where('id_house', $id)->get();

        $seeDetailHouses = HousesModel::find($id);

        $user = $this->user($seeDetailHouses->id_user);
        $priceHouses = HousesModel::where('price', $seeDetailHouses->price)->get();
        $address = $this->address();
        return view('index.information-house', compact('seeDetailHouses', 'user', 'priceHouses', 'address', 'Comments'));
    }

    public function search(Request $request)
    {
        $addresss = $this->address();

        if (isset($_GET['price'])) {
            $getPrice = $_GET['price'];
            $price = explode('-', $getPrice);
            $query = HousesModel::whereBetween('price', [$price[0], $price[1]]);
        }

        if ($_GET['address'] !== "0") {
            $address = $_GET['address'];
            $query = HousesModel::where('id_address', $address);
        }

        if ($_GET['number_room'] !== "0") {
            $numberRoom = $_GET['number_room'];
            $query = HousesModel::where('number_room', $numberRoom);
        }

        if ($_GET['number_bathroom'] !== "0") {
            $numberBathroom = $_GET['number_bathroom'];
            $houses = HousesModel::where('number_bathroom', $numberBathroom);
        }

        if ($_GET['month'] !== "0-11111111111111111") {
            $getMonth = $_GET['month'];
            $month = explode('-', $getMonth);
            $houses = HousesModel::where('number_bathroom', $month);
        }

        $houses = $query->get();

        return view('index.search', compact('houses', 'addresss'));
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
