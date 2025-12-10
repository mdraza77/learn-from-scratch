<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function ($name) {
    echo $name;
    return view('home', ['name' => $name]);
});

// Route::redirect('/home', '/');

Route::view('/about', 'welcome');
