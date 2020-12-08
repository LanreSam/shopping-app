<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gpController extends Controller
{
    public function getAllGrade()
    {
        $grade = DB::table('gp')->get();
        return view('gp', compact('grade'));
    }
}
