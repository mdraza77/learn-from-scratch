<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show() {
        return "Students Show";
    }
    function add() {
        return "Students Add";
    }
    function delete() {
        return "Students Delete";
    }
    function about($name) {
        return $name;
    }
}
