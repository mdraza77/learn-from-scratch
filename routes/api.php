<?php

use App\Http\Controllers\Api\StudentControlle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function() {
    return ['name' => "Raza"];
});

Route::get('/students', [StudentControlle::class, 'index']);
Route::post('/students/add', [StudentControlle::class, 'store'])->name('students.store');