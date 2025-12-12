<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $arr = [1, 2, 3, 4, 5, 6,];
        return view('home', compact('arr'));
    }
}
