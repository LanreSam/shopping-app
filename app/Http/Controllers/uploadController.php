<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $request->file->store('public');
        return 'file has been uploaded successfully';
    }
}
