<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminpesananController extends Controller
{
    public function index()
    {
        return view('adminpesanan');
    }
}