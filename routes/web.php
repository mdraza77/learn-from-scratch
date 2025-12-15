<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', [UserController::class, 'index']);
Route::get('/users', [UserController::class, 'get']);
Route::post('/users', [UserController::class, 'post']);
Route::put('/users', [UserController::class, 'put']);
Route::delete('/users', [UserController::class, 'delete']);
Route::view('/form', 'users');
// Route::any('/users', [UserController::class, 'any']);
Route::match(['get', 'post'], '/users', [UserController::class, 'group1']);
Route::get('/student', [StudentController::class, 'index']);

Route::post('forms', [UserController::class, 'login']);
Route::view('forms', 'user');

Route::view('login', 'login');
Route::view('profile', 'profile');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);