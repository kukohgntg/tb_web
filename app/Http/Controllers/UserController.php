<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function index()
    {
        $user = User::where('status', 'active')->where('role_id', 2)->get();
        return view('user', ['users' => $user]);
    }

    public function registeredUser()
    {
        $registeredUsers = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('registered-users', ['registeredUsers' => $registeredUsers]);
    }

    public function detailUser($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-detail', ['user' => $user]);
    }

    public function approveUser($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return  redirect('user-detail/' . $slug)->with('status', 'User Approve Successfully');
    }

    public function banUser($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-delete', ['user' => $user]);
    }

    public function destroyUser($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return  redirect('users')->with('status', 'User Baned Successfully');
    }

    public function bannedUser(){
        $bannedUser=User::onlyTrashed()->get();
        return view('user-banned', ['bannedUser' => $bannedUser]);
    }

    public function restoreUser($slug)
    {
        $restoreUser = User::withTrashed()->where('slug', $slug)->first();
        // dd($category);
        $restoreUser->restore();
        return  redirect('users')->with('status', 'User Restored Successfully');
    }
}
