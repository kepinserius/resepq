<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.dumpProduct', ['data' => Product::get()]);
    }

    public function store(Request $request)
    {
        return Product::insert([
            'name' => $request->name,
            'bahan' => $request->bahan,
            'masak' => $request->masak,
            'harga' => $request->harga,
            'picture' => $this->storeImage($request->picture),
        ])
            ? redirect('/admin/product')->with('success', 'berhasil menambahkan data')
            : redirect()->back()->with('gagal', 'gagal menambahkan data');
    }

    public function update(Request $request, $id)
    {
        $getImage = Product::where('id', $id)->first();
        if ($request->picture == null) {
            return Product::where('id', $id)->update([
                'name' => $request->name,
                'bahan' => $request->bahan,
                'masak' => $request->masak,
                'harga' => $request->harga
            ])
                ? redirect('/admin/product')->with('success', 'sukses update data')
                : redirect()->back()->with('gagal', 'gagal update data');
        } else {
            $this->deleteImage($getImage['picture']);
            return Product::where('id', $id)->update([
                'name' => $request->name,
                'bahan' => $request->bahan,
                'masak' => $request->masak,
                'harga' => $request->harga,
                'picture' => $this->storeImage($request->picture)
            ])
                ? redirect('/admin/product')->with('success', 'sukses update data')
                : redirect()->back()->with('gagal', 'gagal update data');
        }
    }

    public function destroy($id)
    {
        $data = Product::where('id', $id)->first();
        $this->deleteImage($data['picture']);
        return $data->delete()
            ? redirect('/admin/product')->with('success', 'sukses delete data')
            : redirect()->back()->with('gagal', 'gagal delete data');
    }

    public function deleteImage($name)
    {
        File::delete('uploads/products/' . $name);
    }

    public function storeImage($file)
    {
        $image = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/products/', $image);
        return $image;
    }
}
