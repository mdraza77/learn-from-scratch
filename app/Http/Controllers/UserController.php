<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class UserController extends Controller
{
    public function getUser()
    {
        return view('home');
    }
    public function getUserName($name)
    {
        // return view('home', ['name' => $name]);
        return view('home', compact('name'));
    }

    public function showAdmin()
    {
        if (View::exists('admin.admin')) {
            return view('admin.admin');
        } else {
            return "Admin view does not exist.";
        }
    }
}
