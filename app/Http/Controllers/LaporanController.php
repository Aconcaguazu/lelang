<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use PDF;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Lelang::all();

        $maxBidsSubquery = DB::table('lelang')
            ->select('nama_barang', DB::raw('MAX(harga_akhir) as max_bid'))
            ->groupBy('nama_barang');

        // Main query to retrieve the winner's information
        $endedAuctions = DB::table('lelang')
        ->join('users', 'lelang.name', '=', 'users.name')
        ->join('barang', 'lelang.nama_barang', '=', 'barang.nama_barang')
        ->joinSub($maxBidsSubquery, 'max_bids', function ($join) {
            $join->on('lelang.nama_barang', '=', 'max_bids.nama_barang');
            $join->on('lelang.harga_akhir', '=', 'max_bids.max_bid');
        })
        ->select(
            'barang.nama_barang',
            'users.name as winner_name',
            'max_bids.max_bid as winning_harga_akhir'
        )
        ->get();

        return view('petugas.laporan.index', compact('endedAuctions','item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
