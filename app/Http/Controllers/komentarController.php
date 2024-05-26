<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class komentarController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function admin()
    {
        $data = Comment::with('user')->get();
        return view('admin.comment', ['data' => $data]);
    }

    public function index()
    {
        return view('komentar', ['data' => Comment::get()]);
    }

    public function store(Request $request) {
        $data = Keranjang::where([['user_id', '=', session('id')], ['status', '=', true]])->first();
        if ($data) {
            return Comment::insert([
                'user_id' => session('id'),
                'comment' => $request->comment
            ])
            ? redirect('/komentar')->with('success', 'berhasil menambahkan data')
            : redirect()->back()->with('gagal', 'gagal menambahkan data');
        } else {
            return redirect()->back()->with('alert', 'Silahkan order terlebih dahulu !!!');
        }
    }

    public function destroy($id) {
        return Comment::where('id', $id)->delete()
        ? redirect('/admin/comment')->with('success', 'sukses delete data')
        : redirect()->back()->with('gagal', 'gagal delete data');
    }
}