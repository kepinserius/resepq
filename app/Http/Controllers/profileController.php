<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showProfileForm()
    {
        return view('/profile');
    }
}