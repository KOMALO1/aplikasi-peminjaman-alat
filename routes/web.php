<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, "index"])->name("login");

Route::post("/login", [AuthController::class, "login"]);

Route::resource("/peminjaman", PeminjamanController::class)->middleware("auth");
Route::resource("/user", UserController::class);
Route::resource("/kategori", KategoriController::class);
Route::resource("/alat", AlatController::class);
