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
        $remember = $request->remember;
        if (Auth::attempt($data,$remember)){
            if (Auth::user()->role == RoleConstant::ADMIN) {
                return redirect('/admin');
            }
            return redirect('/shop');
        }
        return back()->with('wrong', "Wrong password! Try again!");
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('cart');
        return redirect('/login');
    }
}
