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

    public function addGrade()
    {
        return view('add-grade');
    }

    public function addGradeSubmit(Request $request)
    {
        DB::table('gp')->insert([
            'course_code'   =>  $request->course_code,
            'score'         =>  $request->score,
            'course_unit'   =>  $request->course_unit,
            
        ]);
    }
}
