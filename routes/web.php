<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;


Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'login')->name('login');
    Route::post('/auth/login', 'postLogin');
    Route::post('/auth/logout', 'logout');
});

Route::middleware('auth:pengguna')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
    });

    Route::controller(BukuController::class)->group(function () {
        Route::get('/dashboard/buku', 'index');
        Route::get('/dashboard/buku/tambah', 'create');
        Route::post('/dashboard/buku/tambah', 'store');
        Route::get('/dashboard/buku/ubah/{kode_buku}', 'update');
        Route::post('/dashboard/buku/ubah/{kode_buku}', 'change');
        Route::post('/dashboard/buku/hapus/{kode_buku}', 'delete');
    });

    Route::controller(TransaksiController::class)->group(function () {
        Route::get('/dashboard/transaksi', 'index');
        Route::get('/dashboard/transaksi/tambah', 'create');
        Route::post('/dashboard/transaksi/tambah', 'store');
    });
});

