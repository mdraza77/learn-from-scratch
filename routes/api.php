<?php

use App\Http\Controllers\Api\StudentControlle;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return ['name' => "Raza"];
});

Route::get('/students', [StudentControlle::class, 'index']);
Route::post('/students/add', [StudentControlle::class, 'store'])->name('students.store');
Route::put('/students/{id}/edit', [StudentControlle::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentControlle::class, 'destroy'])->name('students.destroy');
Route::get('/students/search/{name}', [StudentControlle::class, 'search']);

Route::resource('resource', ResourceController::class);
