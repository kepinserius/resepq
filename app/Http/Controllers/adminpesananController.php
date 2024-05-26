<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class adminpesananController extends Controller
{
    public function index()
    {
        $data = Keranjang::with(['user', 'items', 'items.product'])->where('status', true)->get();
        return view('admin.pesanan', ['data' => $data]);
    }
}