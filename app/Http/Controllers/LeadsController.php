<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadsController extends Controller
{
    public function show ()
    {
        $students = Student::all();

        return view('pages.enquiry.leads')->withStudents($students);

    }
}
