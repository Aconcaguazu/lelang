<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('admin.barangs.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->keterangan = $request->keterangan;
        $barang->tgl_ditutup = $request->tgl_ditutup;
        $barang->harga_awal = $request->harga_awal;
        $barang->foto = $request->foto;
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $barang->foto = $request->file('foto')->getClientOriginalName();
        }
        $barang->save();

        return redirect()->route('barangs.index')->with('success', 'Data Berhasil Ditambahkan');
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
        $barang = Barang::firstWhere('id', $id);
        return view('admin.barangs.edit', compact("barang"));
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
        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->keterangan = $request->keterangan;
        $barang->tgl_ditutup = $request->tgl_ditutup;
        $barang->harga_awal = $request->harga_awal;
        $barang->foto = $request->foto;
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $barang->foto = $request->file('foto')->getClientOriginalName();
        }
        $barang->save();

        return redirect()->route('barangs.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return back()->with('message', 'Data Berhasil Di Hapus !.');
    }
}
