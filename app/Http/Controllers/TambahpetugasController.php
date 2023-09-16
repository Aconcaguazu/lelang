<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TambahpetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::all();
        return view('admin.tambah.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new User;
        $petugas->name = $request->name;
        $petugas->email = $request->email;
        $petugas->password = Hash::make($request->password);
        $petugas->role = $request->role;
        $petugas->save();

        return redirect()->route('tambah.index')->with('massage', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = User::find($id);
        return view('admin.tambah.edit', ['petugas' => $petugas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $petugas = User::findOrFail($id);
        $petugas->name = $request->name;
        $petugas->email = $request->email;
        $petugas->password = Hash::make($request->password);
        $petugas->role = $request->role;
        $petugas->save();

        return redirect()->route('tambah.index')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = User::find($id);
        $petugas->delete();

        return back()->with('message', 'Data Berhasil Di Hapus !.');
    }
}
