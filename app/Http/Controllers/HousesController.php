<?php

namespace App\Http\Controllers;

use App\Model\AddressModel;
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
            $houses = HousesModel::whereBetween('price', [$price[0], $price[1]])
                ->get();
        }

        if (isset($_GET['address'])) {
            $address = $_GET['address'];

            if (isset($houses)) {
                foreach ($houses as $house) {
                    $houses = HousesModel::where('id_address', $house->id_address)
                        ->get();
                }
            } else {
                $houses = HousesModel::where('id_address', $address)
                    ->get();
            }
        }

        if (isset($_GET['number_room'])) {
            $numberRoom = $_GET['number_room'];

            if (isset($houses)) {
                foreach ($houses as $house) {
                    $houses = HousesModel::where('number_room', $house->number_room)
                        ->get();
                }
            } else {
                $houses = HousesModel::where('number_room', $numberRoom)
                    ->get();
            }
        }

        if (isset($_GET['number_bathroom'])) {
            $numberBathroom = $_GET['number_bathroom'];

            if (isset($houses)) {
                foreach ($houses as $house) {
                    $houses = HousesModel::where('number_bathroom', $numberBathroom)
                        ->where('number_room', $house->number_room)
                        ->where('id_address', $house->id_address)
                        ->get();
                }
            } else {
                $houses = HousesModel::where('number_bathroom', $numberBathroom)->get();
            }
        }

        if (isset($_GET['month'])) {
            $getMonth = $_GET['month'];
            $month = explode('-', $getMonth);
            if (isset($houses)) {
                foreach ($houses as $house) {
                    $houses = HousesModel::where('number_bathroom', $house->number_bathroom)
                        ->where('number_room', $house->number_room)
                        ->where('id_address', $house->id_address)
                        ->whereBetween('month', [$month[0], $month[1]])
                        ->get();
                }
            } else {
                $houses = HousesModel::where('number_bathroom', $numberBathroom)->get();
            }
        }
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
