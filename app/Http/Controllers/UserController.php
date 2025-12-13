<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // function index()
    // {
    //     $users = User::all();
    //     // $users = User::get();
    //     return view('users', compact('users'));
    // }
    function get()
    {
        return "Get Method called";
    }
    function post()
    {
        return "Post Method called";
    }
    function put()
    {
        return "Put Method called";
    }
    function delete()
    {
        return "Delete Method called";
    }
}
