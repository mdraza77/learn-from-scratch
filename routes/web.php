<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
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

Route::view('client', 'client');
Route::post('client', [ClientController::class, 'add']);

Route::get('/upload', [UploadController::class, 'showUploadForm']);
Route::post('/upload', [UploadController::class, 'uploadFile']);

Route::get('about/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('about',);
});


Route::get('/students', [StudentController::class, 'add_students'])->name('students.createForm');
Route::post('/students', [StudentController::class, 'store_students'])->name('students.create');
Route::get('/students', [StudentController::class, 'list_students']);