<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestFormLogin;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function login(RequestFormLogin $request)
    {
        $data=[
            'email' => $request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($data)){
            return redirect('/admin');
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
