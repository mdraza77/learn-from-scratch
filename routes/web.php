<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', [UserController::class, 'addUser'])->name('user.form');
Route::post('/user-form', [UserController::class, 'storeUser'])->name('user.store');

Route::view('/home', 'home');
Route::view('/about', 'about')->name('about');
Route::get('/home', [HomeController::class, 'index'])->name('home');