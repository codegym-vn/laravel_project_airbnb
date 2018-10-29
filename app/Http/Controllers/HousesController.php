<?php

namespace App\Http\Controllers;

use App\Model\HousesModel;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function showHouses() {
        $houses = HousesModel::orderBy('status', 'desc')
            ->paginate(10, ['*'], 'trang');
        return view('index.list-bock-house', compact('houses'));
    }
}
