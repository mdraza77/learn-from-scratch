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
    function any()
    {
        return "Any Method called";
    }
    function group1()
    {
        return "Group1 Method called";
    }

    public function login(Request $request) {
        echo "Request Method is " . $request->method();
        echo "<br>";
        echo "Request URL is " . $request->url();
        echo "<br>";
        echo "Request Path is " . $request->path();
        echo "<br>";
        echo "Request Name is " . $request->input('name');
        echo "<br>";
        echo "Request Password is " . $request->input('password');
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->collect());
        echo "<br>";
        if ($request->isMethod('post')) {
            echo "Execute for post";
        } else {
            echo "Dont Execute";
        }
        echo "<br>";
        echo "IP is " . $request->ip();
        // return $request->all();
    }
}
