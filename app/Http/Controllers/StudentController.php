<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function fetchStudent()
    {
        $student = Student::all();
        return $student;
    }
}
