<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', [UserController::class, 'addUser'])->name('user.form');
Route::post('/user-form', [UserController::class, 'storeUser'])->name('user.store');

Route::view('/home', 'home');
Route::view('/about', 'about')->name('about');

Route::prefix('student')->group(function () {
    Route::get('/show', [HomeController::class, 'showStudent'])->name('home');
    Route::get('/add', [HomeController::class, 'addStudent'])->name('home');
});


Route::prefix('students')->controller(StudentController::class)->group(function () {
    Route::get('/show', 'show')->name('students.show');
    Route::get('/add', 'add');
    Route::get('/delete', 'delete');
    Route::get('/about/{name}', 'about');
});
