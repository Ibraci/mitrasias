<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Models\Course;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('pages.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('pages.students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
            'rollno' => 'required',
            'first_name' => 'required|min:3',
            'middle_name' => 'nullable|min:1',
            'last_name' => 'nullable|min:1',
            'email' => 'required|unique:students|email',
            'phone' => 'required|unique:students|numeric|min:10',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'pictures' => 'nullable|file',
            'documents' => 'nullable|file',
            'school_college' => 'nullable|min:5',
            'guardian_title_name' => 'nullable',
            'guardian_first_name' => 'nullable|min:3',
            'guardian_middle_name' => 'nullable|min:3',
            'guardian_last_name' => 'nullable|min:3',
            'guardian_relation' => 'nullable',
            'guardian_phone' => 'nullable',
            'guardian_email' => 'nullable',
            'guardian_gender' => 'nullable',
            'guardian_occupation' => 'nullable',
            'course_name' => 'required',
            'course_academic_year' => 'nullable',
            'course_quantity' => 'nullable',
            'course_fees' => 'required',
            'course_discount' => 'nullable',
            'course_discount_method' => 'nullable',
            'course_total_fees' => 'nullable',
            'course_notes' => 'nullable',
            'course_batch' => 'nullable',
            'payment_method' => 'nullable',
            'payment_installment' => 'default:3',
        ]);

        Student::create([
            'rollno' => $request->rollno,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'pictures' => $request->pictures,
            'documents' => $request->documents,
            'school_college' => $request->school_college,
            'guardian_title_name' => $request->guardian_title_name,
            'guardian_first_name' => $request->guardian_first_name,
            'guardian_middle_name' => $request->guardian_middle_name,
            'guardian_last_name' => $request->guardian_last_name,
            'guardian_relation' => $request->guardian_relation,
            'guardian_phone' => $request->guardian_phone,
            'guardian_email' => $request->guardian_email,
            'guardian_gender' => $request->guardian_gender,
            'guardian_occupation' => $request->guardian_occupation,
            'course_name' => $request->course_name,
            'course_academic_year' => $request->course_academic_year,
            'course_quantity' => $request->course_quantity,
            'course_fees' => $request->course_fees,
            'course_discount' => $request->course_discount,
            'course_discount_method' => $request->course_discount_method,
            'course_total_fees' => $request->course_total_fees,
            'course_notes' => $request->course_notes,
            'course_batch' => $request->course_batch,
            'payment_method' => $request->payment_method,
            'payment_installment' => $request->payment_installment
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
