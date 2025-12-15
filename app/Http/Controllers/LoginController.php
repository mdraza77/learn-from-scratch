<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // store name in session
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('allData', $request->input());
        echo session('name');
        return redirect('profile')->with('success', 'Name stored in session');
    }

    public function logout()
    {
        session()->pull('name');
        return redirect('profile')->with('success', 'Name deleted from session');
    }
}
