<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class komentarController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        return view('komentar');
    }
}