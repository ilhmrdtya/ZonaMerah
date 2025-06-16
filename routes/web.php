<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/kontak', [AuthController::class, 'kontak'])->name('kontak');
Route::get('/Tentang', [AuthController::class, 'Tentang'])->name('Tentang');
Route::get('/pesan', [AuthController::class, 'pesan'])->name('pesan');
Route::get('tukar_tambah', [AuthController::class, 'tukar_tambah'])->name('tukar_tambah');
Route::get('/donasiProduk', [AuthController::class, 'donasiProduk'])->name('donasiProduk');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/message', [AuthController::class, 'message'])->name('message');
Route::get('/Lihatproduk', [AuthController::class, 'Lihatproduk'])->name('Lihatproduk');

Route::get('/produk/{id}', function ($id) {
    return view('produk.detail');
});

// Route::resource('/products', ProductController::class);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    Route::get('/tukar-tambah', [ProductController::class, 'tukar_tambah']);
Route::get('/donasiproduk', [ProductController::class, 'donasiProduk']);
