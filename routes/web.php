<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home/{name}', function ($name) {
//     echo $name;
//     return view('home', ['name' => $name]);
// });
Route::get('/home', [UserController::class, 'getUser']);
Route::get('/home/{name}', [UserController::class, 'getUserName']);
Route::get('/admin', [UserController::class, 'showAdmin']);

// Route::redirect('/home', '/');

// Route::view('/admin', 'admin.admin');
