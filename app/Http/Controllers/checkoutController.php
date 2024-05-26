<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        $data = Keranjang::with('user', 'items', 'items.product')->where('user_id', session('id'))->first();
        // dd($data->user->toArray());
        if ($data->user->no_hp === null && $data->user->alamat === null) {
            return redirect()->back()->with('alert', 'Lengkapi Profil Anda !!!');
        }
        return view('checkout', ['data' => $data]);
    }

    public function checkOut($id) {
        return Keranjang::where('id', $id)->update([
            'status' => true
        ])
        ? redirect('/beranda')->with('alert', 'pesanan anda telah diterima, silahkan tunggu pihak kami menghubungi anda !!')
        : redirect()->back()->with('gagal', 'gagal update data');
    }
}