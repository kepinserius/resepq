<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop1Controller extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        return view('shop1');
    }
}