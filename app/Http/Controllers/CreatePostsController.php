<?php

namespace App\Http\Controllers;

use App\Model\HousesModel;
use App\Model\ImageModel;
use App\Model\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreatePostsController extends Controller
{
    public function index(){
        $post = PostModel::all();
        return view('index.list-bock-houses', compact('post'));
    }

    public function create(){
        return view('collection.user.create-post');
    }

    public function store(Request $request){
        $this->store1();

        $houses =  new HousesModel();


        $image = new ImageModel();
        $file = $request->inputFile;

        if (!$request->hasFile('inputFile')) {
            $image->image = $file;

        } else {
            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng với tên mới
            $image->image = $newFileName;
        }
        $image->save();
        die();

        $post = new PostModel();

        $post->name = $request->input('name');
        $post->room = $request->input('room');
        $post->address = $request->input('address');
        $post->number_room = $request->input('number_room');
        $post->number_bathroom = $request->input('number_bathroom');
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->describe = $request->input('describe');


        $post->save();
        $message = "Create List $request->inputName success!";
        Session::flash('create-success', $message);
        return redirect()->route('listBockHouse');

    }

    public function store1(){
        //insert houses
    }
}
