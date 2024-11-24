<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);