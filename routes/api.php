<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::apiResource('books', BookController::class);
Route::get('/books', [BookController::class, 'index']);
Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');
Route::post('/books', [BookController::class, 'store']); // Rute POST untuk membuat buku baru
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
Route::middleware('auth:sanctum')->group(function () {

});
