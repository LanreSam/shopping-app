<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $name = strtoupper('Ezechie');
        $users = array(
            'name' => 'Ezechie Lanre S.',
            'email' => 'myemail@mail.com',
            'phone' => '08012345678'
        );
        return view('users', compact('name', 'users'));
    }
}
