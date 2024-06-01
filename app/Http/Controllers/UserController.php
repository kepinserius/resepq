<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user', ['data' => User::get()]);
    }

    public function store(Request $request)
    {
        $getUser = User::where('email', $request->email)->first();
        if (!$getUser) {
            if ($request->password == $request->confirm) {
                return User::insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => 'user'
                ])
                    ? redirect('/auth/login')->with('sukses', 'berhasil menambahkan data')
                    : redirect()->back()->with('alert', 'gagal menambahkan data');
            } else {
                return redirect()->back()->with('alert', 'Password tidak sama');
            }
        } else {
            return redirect()->back()->with('alert', 'email telah terdaftar');
        }
    }

    public function createAdmin(Request $request)
    {
        $getUser = User::where('email', $request->email)->first();
        if (!$getUser) {
            if ($request->password == $request->confirm) {
                return User::insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => 'admin'
                ])
                    ? redirect('/admin/user')->with('sukses', 'berhasil menambahkan data')
                    : redirect()->back()->with('alert', 'gagal menambahkan data');
            } else {
                return redirect()->back()->with('alert', 'Password tidak sama');
            }
        } else {
            return redirect()->back()->with('alert', 'email telah terdaftar');
        }
    }

    public function update(Request $request, $id)
    {
        $getUser = User::where('email', $request->email)->first();
        if ($getUser) {
            if ($getUser->email === $request->email && $getUser->id === (int) $id) {
                return $this->saveUpdate($request, $id, $getUser);
            } else if ($getUser->id === (int) $id) {
                return redirect()->back()->with('gagal', 'email sudah terdaftar');
            }
        } else {
            return $this->saveUpdate($request, $id, $getUser);
        }
    }

    public function saveUpdate($request, $id, $data)
    {
        if ($request->picture) {
            $this->deleteImage($data['picture']);
            return User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->phone,
                'alamat' => $request->address,
                'picture' => $this->storeImage($request->picture)
            ])
                ? redirect('/profile')->with('sukses', 'berhasil menambahkan data')
                : redirect()->back()->with('gagal', 'gagal menambahkan data');
        } else {
            return User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'no_hp' => $request->phone,
                'alamat' => $request->address
            ])
                ? redirect('/profile')->with('sukses', 'berhasil menambahkan data')
                : redirect()->back()->with('gagal', 'gagal menambahkan data');
        }
    }

    public function deleteImage($name)
    {
        File::delete('uploads/users/' . $name);
    }

    public function storeImage($file)
    {
        $image = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/users/', $image);
        return $image;
    }
}
