<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashadminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function barang()
    {
        return view('admin.barang');
    }
}
