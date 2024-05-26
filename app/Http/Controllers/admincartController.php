<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class admincartController extends Controller
{
    public function index()
    {
        $data = Keranjang::with(['user', 'items', 'items.product'])->where('status', false)->get();
        
        return view('admin.cart', ['data' => $data]);
    }
}