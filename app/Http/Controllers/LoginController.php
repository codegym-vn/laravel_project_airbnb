<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValation;
use App\Model\HousesModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signIn()
    {
        return view('login.sign-in');
    }

    /**
     * @param LoginValation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login(LoginValation $request)
    {

        $use = $request->input('username');
        $pass = $request->input('password');

        $loginData = [
            'email' => $use,
            'password' => $pass
        ];

        if (Auth::attempt($loginData)) {

            $login = User::where('email', $use)->get();
            foreach ($login as $user) {
                if ($user->role == 1) {
                    return redirect()->route('dashBoard');
                } else if ($user->role == 2) {
                    return view('collection.userPostHouse.dashboard', compact('user'));
                } else if (isset($_GET['id'])) {
                    if ($user->role == 3) {
                        $id = $_GET['id'];
                        $house = HousesModel::find($id);
                        return view('collection.userBockHouse.dashboard', compact('user', 'house'));
                    }
                } else {
                    if ($user->role == 3) {
                        $id = $_GET['id'];
                        $house = HousesModel::find($id);
                        return view('collection.userBockHouse.dashboard', compact('user', 'house'));
                    }
                }
            }
        } else {
            return redirect()->route('sign-in')->with(['errLogin' => 'Sai tên đăng nhập hoặc mật khẩu']);
        }
    }

    public function editUser()
    {
        $login = User::all();
        return view('userPostHouse.edit-userPostHouse', [
            'login' => $login
        ]);
    }

    public function signUp()
    {
        return view('login.sign-up');
    }

    public function register(Request $request)
    {
        $register = new User();
        $register->role = $request->input('role');
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = bcrypt($request->input('password'));
        $register->save();
        return redirect()->route('sign-in');
    }

}
