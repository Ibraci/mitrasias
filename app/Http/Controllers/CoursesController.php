<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(3);

        return view('pages.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'course_name' => 'required|min:5',
            'course_sujects' => 'nullable',
            'course_code' => 'required|min:2|max:7',
            'course_type' => 'required',
            'course_shift' => 'required',
            'course_fees' => 'required|numeric|min:100'
        ]);

        Course::create([
            'course_name' => $request->course_name,
            'course_sujects' => $request->course_sujects,
            'course_code' => $request->course_code,
            'course_type' => $request->course_type,
            'course_shift' => $request->course_shift,
            'course_fees' => $request->course_fees
        ]);

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('pages.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('pages.courses.edit', compact('course'));
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
        $this->validate($request, [
            'course_name' => 'required|min:5',
            'course_sujects' => 'nullable',
            'course_code' => 'required|min:2',
            'course_type' => 'required',
            'course_shift' => 'required',
            'course_fees' => 'required|numeric|min:100'
        ]);

        $course = Course::findOrFail($id);

        $course->update([
            'course_name' => $request->course_name,
            'course_sujects' => $request->course_sujects,
            'course_code' => $request->course_code,
            'course_type' => $request->course_type,
            'course_shift' => $request->course_shift,
            'course_fees' => $request->course_fees
        ]);

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);

        return redirect()->route('courses.index');
    }
}
