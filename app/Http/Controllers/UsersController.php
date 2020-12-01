<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        //return "The request method is: ". "<h1>".$request->method()."</h1>";
        //return $request->path();
        return $request->url();
    }
}
