<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;
    protected $table = 'lelang';
    protected $fillable = ['name', 'nama_barang', 'harga_akhir'];

    public function barang()
{
    return $this->belongsTo(Barang::class, 'nama_barang', 'nama_barang');
}

}
