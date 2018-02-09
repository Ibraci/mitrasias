<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show ()
    {
        $students = Student::all();

        return view('pages.enquiry.leads')->withStudents($students);

    }
}
