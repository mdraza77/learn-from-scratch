<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function addUser()
    {
        return view('user-form');
    }

    public function storeUser(Request $request)
    {
        // dd($request->all());
        Log::info($request->all());
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
        ]);
        Log::info('Data Validation passed');
        // $validated['password'] = 123123123;
        User::Create($validated);

        Log::info('Data Inserted');

        return redirect()->route('user.form')->with('success', 'Inserted Successfully');
    }
}
