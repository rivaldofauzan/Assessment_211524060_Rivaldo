<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class);
Route::resource('kasir', KasirController::class);
