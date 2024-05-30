<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        $data = Product::all()->take(10);
        return view('beranda', ['data' => $data]);
    }

    public function getAllData() {
        return view('product2', ['data' => Product::get()]);
    }
}