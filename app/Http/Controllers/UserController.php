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
        dd($request->all());
        Log::info($request->all());
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'userName' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|numeric',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            'gender' => 'required|in:male,female',
            'skills' => 'required',
            'skillsRange' => 'required|numeric',
        ]);
        Log::info('Data Validation passed');
        // $validated['password'] = 123123123;
        User::Create($validated);

        Log::info('Data Inserted');

        return redirect()->route('user.form')->with('success', 'Inserted Successfully');
    }
}
