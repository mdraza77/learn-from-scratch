<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class UserController extends Controller
{
    public function homePage()
    {
        return view('home');
    }
    public function aboutPage()
    {
        return view('about');
    }
}
