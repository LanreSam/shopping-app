<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allUsers()
    {
        $users = Users::paginate(10);
        return view('users', compact('users'));
    }
}
