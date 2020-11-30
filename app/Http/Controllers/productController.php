<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $fruits = array('orange', 'banana', 'apple', 'pineapple','cashew');
        return view('welcome', compact('fruits'));
    }
}
