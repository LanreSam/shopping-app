<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        //return "The request method is: ". "<h1>".$request->method()."</h1>";
        //return $request->path();
        return $request->url();
    }
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = '1234567890';

        $user = new User();
        $user->name = "Lanre";
        $user->email = "Lanre@gmail.com";
        $user->password = encrypt('secret');
        $user->Phone()->save();
        $user->save();
        return "Record has been saved successfully";
    }
}
