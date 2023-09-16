<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //untuk memisahkan dashboard user sesuai hasil input pada login

    function index(){
        return view('dashboard');
    }

    function masyarakat(){
        return view('masyarakat');
    }

    function petugas(){
        return view('petugas');
    }

    function admin(){
        return view('admin');
    }
}
