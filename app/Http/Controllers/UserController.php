<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function profile(Request $request)
    public function profile()
    {
        // $request->session()->flush();
        // dd('halaman profile');
        return view('profile');
    }
}
