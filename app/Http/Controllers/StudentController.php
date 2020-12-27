<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function fetchStudent()
    {
        $student = Student::whereBetween('id', [50,60])->orderBy('id','DESC')->get();
        return $student;
    }
}
