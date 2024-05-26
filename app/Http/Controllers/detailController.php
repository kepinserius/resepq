<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class detailController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index($id)
    {
        return view('detail', ['data' => Product::where('id', $id)->first()]);
    }
}
