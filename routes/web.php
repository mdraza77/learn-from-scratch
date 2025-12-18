<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
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


Route::get('/students/create', [StudentController::class, 'add_students'])->name('students.createForm');
Route::post('/students', [StudentController::class, 'store_students'])->name('students.create');
Route::get('/students', [StudentController::class, 'list_students'])->name('students.list');
Route::post('/students/{id}', [StudentController::class, 'delete_students'])->name('students.delete');
Route::get('/students/{id}/edit', [StudentController::class, 'edit_students'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update_students'])->name('students.update');

Route::get('/search', [StudentController::class, 'search'])->name('students.search');
Route::post('delete-multiple', [StudentController::class, 'deleteMultiple'])->name('students.deleteMultiple');

Route::get('/image', [ImageController::class, 'add_image'])->name('image.add');
Route::get('/image/list', [ImageController::class, 'show_image_list'])->name('image.list');
Route::post('/image', [ImageController::class, 'store_image'])->name('image.store');

Route::view('/about-page', 'about-page');
Route::view('/home-page', 'home-page');


// 18122025 002 Maintenance Mode php artisan down --secret="raza" php artisan down php artisan up

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/sellers', [SellerController::class, 'index']);