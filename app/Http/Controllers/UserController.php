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
        $name = "Md Raza";
        $users = ["Md Raza", "Ayush", "Aman", "John Doe"];
        if (View::exists('admin.admin')) {
            return view('admin.admin', compact('name', 'users'));
        } else {
            return "Admin view does not exist.";
        }
    }
}
