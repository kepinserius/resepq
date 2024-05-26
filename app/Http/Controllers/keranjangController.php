<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function index()
    {
        $data = $this->addAuthCart();
        return view('keranjang', ['data' => $data]);
    }

    public function updateJson(Request $request, $id)
    {
        return cartItem::where('id', $id)->update([
            'qty' => $request->qty
        ])
            ? response()->json($this->addAuthCart())
            : response()->json('error');
    }

    public function store(Request $request)
    {
        $cartId = $this->addAuthCart();
        // dd($cartId->toArray());
        $existItem = CartItem::where([
            'keranjang_id' => $cartId['id'],
            'product_id' => $request->id
        ])->first();
        if (!$existItem) {
            return CartItem::insert([
                'keranjang_id' => $cartId['id'],
                'product_id' => $request->id,
                'qty' => 1
            ])
                ? redirect('/keranjang')->with('success', 'berhasil menambahkan data')
                : redirect()->back()->with('gagal', 'gagal menambahkan data');
        }


        $existItem->qty = $existItem->qty + 1;
        $existItem->save();
        return redirect('/keranjang');
    }

    function addAuthCart()
    {
        $total = 0;
        $data = Keranjang::with(['items', 'items.product'])->where([['user_id', '=', session('id')], ['status', '=', false]])->first();
        if (!$data) {
            return Keranjang::create([
                'user_id' => session('id')
            ]);
        }

        if (count($data->items) > 0) {
            foreach ($data->items as $item) {
                $total += $item->qty * $item->product->harga;
            }
        }

        $data->update([
            'total' => $total
        ]);
        return $data;
    }

    public function destroy($id)
    {
        return CartItem::where('id', $id)->delete()
            ? redirect('/keranjang')->with('success', 'berhasil hapus data')
            : redirect()->back()->with('gagal', 'gagal hapus data');
    }
}
