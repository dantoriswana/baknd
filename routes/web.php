<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;

// Rute untuk menampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Rute untuk memproses login
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk resource books
Route::resource('books', BookController::class);
