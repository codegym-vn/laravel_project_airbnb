<?php

namespace App\Http\Controllers;

use App\Model\HousesModel;
use Illuminate\Http\Request;

class HousesController extends RetrievesllDataController
{
    public function showHouses(Request $request)
    {
        $address = $this->address();
            $houses = HousesModel::orderBy('status', 'desc')
                ->paginate(10, ['*'], 'trang');
        return view('index.list-bock-house', compact('houses', 'address'));
    }

    public function seeDetails($id){
        $seeDetailHouses = HousesModel::find($id);
        return view('index.information-house', compact('seeDetailHouses'));
    }

    public function search(Request $request){
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
}
