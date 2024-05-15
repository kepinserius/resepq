<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Redirect;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create', ['data_admin' => admin::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => 'nama',
            'no_hp' => 'no hp',
            'alamat' => 'alamat',
            'pesanan' => 'pesanan',
            'jumlah' => 'jumlah',
            'harga' => 'harga',
        ];

        admin::create($data);
        return redirect('/admin/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return admin::where('id', $id)->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'pesanan' => $request->pesanan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ])
        ? redirect('/admin/create')
        : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return admin::where('id', $id)->delete()
        ?redirect('/admin/create')
        : redirect()->back();
    }
}
