<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);