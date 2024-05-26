<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        return view('beranda', ['data' => Product::get()]);
    }
}