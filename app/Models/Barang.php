<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['nama_barang','keterangan','tgl_ditutup','harga_awal','foto'];
    
    public function lelang()
{
    return $this->hasOne(Lelang::class, 'nama_barang', 'nama_barang');
}

}
