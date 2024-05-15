<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        return view('shop');
    }
}