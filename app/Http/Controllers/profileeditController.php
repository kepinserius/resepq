<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileeditController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showProfileeditForm()
    {
        return view('/profileedit');
    }
}