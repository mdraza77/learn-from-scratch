<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add(Request $request) {
        $request->session()->flash('success', 'Inserted');
        $request->session()->flash('error', 'Not Inserted');
        return redirect('client');
    }
}
