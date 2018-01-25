<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsListController extends Controller
{
    public function show()
    {
        $students = Student::all();

        return view('pages.students.students-list')->withStudents($students);
    }
}
