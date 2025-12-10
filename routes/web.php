<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'homePage']);
Route::get('/about', [UserController::class, 'aboutPage']);
