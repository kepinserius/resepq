<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showProfileForm()
    {
        return view('profile', ['data' => User::where('id', session('id'))->first()]);
    }

    public function show($id)
    {
        return view('profileedit', ['data' => User::where('id', $id)->first()]);
    }

}
