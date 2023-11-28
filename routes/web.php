<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\TransaksiController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::resource('barang', BarangController::class);
Route::resource('kasir', KasirController::class);
Route::resource('tenan', TenanController::class);
