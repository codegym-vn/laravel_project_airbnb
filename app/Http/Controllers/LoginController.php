<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function signIn()
    {
        return view('login.sign-in');
    }


    public function login(StoreLogin $request)
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
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->route('dashboardUser');
                }
            }
        } else {
            return redirect()->route('login')->with(['errLogin' => 'Sai tên đăng nhập hoặc mật khẩu '
            ]);
        }
    }

    public function editUser()
    {
        $login = User::all();
        return view('user.edit-user', [
            'login' => $login
        ]);
    }

    public function signUp()
    {
        return view('login.sign-up');
    }


    /**
     * @method save()
     */

    public function register(Request $request)
    {
        $register = new User();
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = bcrypt($request->input('password'));
        $register->role = RoleInterface::user;
        $register->save();
        return redirect()->route('login');
    }

    public function test()
    {
        return view('testb');
    }
}
