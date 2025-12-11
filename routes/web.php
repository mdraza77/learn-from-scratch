<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', [UserController::class, 'addUser'])->name('user.form');
Route::post('/user-form', [UserController::class, 'storeUser'])->name('user.store');