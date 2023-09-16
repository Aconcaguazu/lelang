<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangsController;
use App\Http\Controllers\DashadminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashmasyarakatController;
use App\Http\Controllers\DashpetugasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TambahpetugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class, 'index'])->name('login');
    Route::post('/',[SesiController::class, 'login']);
});

//route untuk menampilkan halaman registrasi
Route::get('/registrasi', [SesiController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi', [SesiController::class, 'registrasisave'])->name('registrasisave');

Route::get('/home', function () {
    return redirect('/dashboard');
});

//pembagian antar input login
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/masyarakat', [DashboardController::class, 'masyarakat'])->middleware('userAkses:masyarakat');
    Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->middleware('userAkses:petugas');
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/logout', [SesiController::class, 'logout']);
});

//admin
Route::resource('admin', DashadminController::class);
Route::resource('barangs', BarangsController::class);
Route::resource('tambah', TambahpetugasController::class);

//petugas
Route::resource('petugas', DashpetugasController::class);
Route::resource('barang', BarangController::class);
Route::resource('laporan', LaporanController::class);

//masyarakat
Route::resource('masyarakat', DashmasyarakatController::class);