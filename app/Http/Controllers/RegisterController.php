<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('login.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->fill($request->input());

        $alert = 'Created an account successful!';
        return back()->with('alert', $alert);
    }
}
