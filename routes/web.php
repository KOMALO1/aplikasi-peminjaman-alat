<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/peminjaman", PeminjamanController::class);
Route::resource("/user", UserController::class);
Route::resource("/kategori", KategoriController::class);
