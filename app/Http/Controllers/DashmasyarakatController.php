<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashmasyarakatController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('masyarakat.index', compact('barang'));
    }

    public function show($id)
    {
        $item = Barang::findOrFail($id);
        $lelang = DB::table('lelang')
            ->where('nama_barang', $item->nama_barang)
            ->orderByDesc('harga_akhir')
            ->first();
        $bidder = DB::table('lelang')
            ->where('nama_barang', $item->nama_barang)
            ->orderByDesc('harga_akhir')
            ->get();
        return view('masyarakat.lelang.index', compact('item', 'lelang','bidder'));
    }


    public function store(Request $request)
    {
        $lelang = new Lelang();
        $lelang->name = $request->name;
        $lelang->nama_barang = $request->nama_barang;
        $lelang->harga_akhir = $request->harga_akhir;
        $lelang->save();

        return redirect()->route('masyarakat.index')->with('success', 'Data Berhasil Ditambahkan');
    }
}
