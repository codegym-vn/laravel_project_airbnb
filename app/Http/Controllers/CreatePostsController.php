<?php

namespace App\Http\Controllers;

use App\Model\AddressModel;
use App\Model\HousesModel;
use App\Model\ImageModel;
use App\Model\KindHouseModel;
use App\Model\PostModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreatePostsController extends RetrievesllDataController
{
    public function index()
    {
        $post = PostModel::all();
        return view('index.list-bock-houses', compact('post'));
    }

    public function showNewPost($id)
    {
        $user = $this->user($id);
        $posts = PostModel::orderBy('id', 'desc')
            ->get();
        return view('collection.user.newPost', compact('user', 'posts'));
    }

    public function create(Request $request, $id)
    {
        $kindHouses = KindHouseModel::all();
        $address = AddressModel::all();
        $user = User::find($id);
        return view('collection.admin.creat-post', compact('address', 'kindHouses', 'user'));

    }

    public function store(Request $request, $id)
    {
        //gọi function thêm nhà
        $this->insertHouses($request, $id);
        $houses = HousesModel::orderBy('id', 'desc')->first();

        //lấy giá trị mới nhất của nhà

        //lấy id thêm ảnh
        $this->insertImage($request, $houses->id);
        $image = ImageModel::orderBy('id', 'desc')->first();

        //thêm bài post
        $this->insertPost($request, $image->id, $houses->id, $id);
    }

    protected function insertPost($request, $idImage, $idHouses, $idUser)
    {
        //thêm bài post
        $post = new PostModel();

        $post->name = $request->input('name');
        $post->address = $request->input('address');
        $post->number_room = $request->input('number_room');
        $post->number_bathroom = $request->input('number_bathroom');
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->describe = $request->input('describe');
        $post->id_image = $idImage;
        $post->id_house = $idHouses;
        $post->id_user = $idUser;
        $post->save();
        $message = "Create List $request->inputName success!";
        Session::flash('create-success', $message);
        return redirect()->route('listBockHouse');
    }

    protected function insertImage($request, $idHouses)
    {
        //thêm ảnh
        $image = new ImageModel();
        $file = $request->inputFile;
        $image->id_house = $idHouses;


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
    }

    protected function insertHouses($request, $idUser)
    {
        //thêm nhầ
        $houses = new HousesModel();
        $houses->name = $request->input('name');
        $houses->number_room = $request->input('number_room');
        $houses->number_bathroom = $request->input('number_bathroom');
        $houses->price = $request->input('price');
        $houses->describe = $request->input('describe');
        $houses->id_address = $request->input('id_address');
        $houses->id_kind_house = $request->input('id_kind_house');
        $houses->id_user = $idUser;
        $houses->month = 0;
        $houses->status = 0;

        $houses->save();
        $message = "Create List $request->inputName success!";
        Session::flash('create-success', $message);
        return redirect()->route('listBockHouse');

    }
}
