<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

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
        if (($request->score) >= 70 && ($request->score)<=100) {
            $grade = 'A';
        }
        elseif (($request->score) >= 60 && ($request->score)<=69) {
            $grade = 'B';
        }
        elseif (($request->score) >= 50 && ($request->score)<=59) {
            $grade = 'C';
        }
        elseif (($request->score) >= 45 && ($request->score)<=49) {
            $grade = 'D';
        }
        elseif (($request->score) >= 40) {
            $grade = 'E';
        }
        else {
            $grade = 'F';
        }

        DB::table('gp')->insert([
            'course_code'   =>  $request->course_code,
            'score'         =>  $request->score,
            'course_unit'   =>  $request->course_unit,
        ]);
        return back()->with('msg', 'Grade added succesfully!');
    }
}
