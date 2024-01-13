<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookControllers extends Controller
{
    // public function index(Request $request)
    public function index()
    {
        // $request->session()->flush();
        // dd('halaman buku');
        return view('book');
    }
}
