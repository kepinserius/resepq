<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincartController extends Controller
{
    public function index()
    {
        return view('admincart');
    }
}