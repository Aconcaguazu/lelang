<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    //proses login authentication
    
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi!!',
            'password.required'=>'Password wajib diisi!!',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'masyarakat'){
                return redirect('/masyarakat');
            }elseif(Auth::user()->role == 'petugas'){
                return redirect('/petugas');
            }elseif(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
            return redirect('dashboard');
        }else
        {
            return redirect('')->withErrors('Email dan Password yang dimasukan tidak sesuai')->withInput();
        }
    }

    function registrasi()
    {
        return view('registrasi');
    }

    function registrasisave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 6 karakter!',
        ]);

        // Create a new user
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

        return redirect('/masyarakat'); // Ganti dengan rute yang sesuai setelah login
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
