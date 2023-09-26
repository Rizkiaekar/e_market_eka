<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

Route::get('/', [HomeController::class, 'index']);
Route::get('profile', [HomeController::class, 'profile']);
Route::get('contact', [HomeController::class, 'contact']);
Route::resource('produk', ProdukController::class);
Route::resource('barang', BarangController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('pemasok', PemasokController::class);
Route::resource('pelanggan', PelangganController::class);
Route::get('/download', [ProdukController::class, 'download']);
