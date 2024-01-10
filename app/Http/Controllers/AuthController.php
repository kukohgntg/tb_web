<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        //TODO:https://youtu.be/r6deD2T-bRM?si=XQ8Stm5bNaJDo0HX&t=2457
        dd('berhasil');
    }
}
