<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class indexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function listBockHouse()
    {
        return view('index.list-bock-house');
    }

    public function informationHouse()
    {
        return view('index.information-house');
    }

    public function createPost()
    {
        return view('collection.userPostHouse.create-post');

    }
}
