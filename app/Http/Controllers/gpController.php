<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;
use Symfony\Component\Console\Input\Input;

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
            $points = 5;
        }
        elseif (($request->score) >= 60 && ($request->score)<=69) {
            $grade = 'B';
            $points = 4;
        }
        elseif (($request->score) >= 50 && ($request->score)<=59) {
            $grade = 'C';
            $points = 3;
        }
        elseif (($request->score) >= 45 && ($request->score)<=49) {
            $grade = 'D';
            $points = 2;
        }
        elseif (($request->score) >= 40) {
            $grade = 'E';
            $points = 1;
        }
        else {
            $grade = 'F';
            $points = 0;
        }

        $qp = $points * ($request->course_unit);

        DB::table('gp')->insert([
            'course_code'   =>  $request->course_code,
            'score'         =>  $request->score,
            'course_unit'   =>  $request->course_unit,
            'grade'         =>  $grade,
            'points'        =>  $points,
            'quality_points'=>  $qp,
            'semester'      =>  $request->semester,
            'level'         =>  $request->level
        ]);
        return back()->with('msg', 'Grade added succesfully!');
    }
}
