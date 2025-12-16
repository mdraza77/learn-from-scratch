<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showUploadForm() {
        return view('upload');
    }

    public function uploadFile(Request $request) {
        $path = $request->file('file')->store('uploads', 'public');
        $fileNameArray = explode('/', $path);
        $fileName = $fileNameArray[1];
        return view('displayfile', compact('fileName'));
    }
}
