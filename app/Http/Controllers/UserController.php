<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser() {
        return view('home');
    }
    public function getUserName($name) {
        // return view('home', ['name' => $name]);
        return view('home', compact('name'));
    }
}
