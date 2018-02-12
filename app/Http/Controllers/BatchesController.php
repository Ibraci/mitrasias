<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class BatchesController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::paginate(20);

        return view('pages.batches.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('pages.batches.create', compact('courses'));
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
            'batch_name' => 'required|min:3',
            'batch_number' => 'required|min:3|unique:batches',
            'batch_subject' => 'required|min:3',
            'batch_course' => 'required',
            'batch_academic_year' => 'required'
        ]);

        Batch::create([
            'batch_name' => $request->batch_name,
            'batch_number' => $request->batch_number,
            'batch_subject' => $request->batch_subject,
            'batch_course' => $request->batch_course,
            'batch_academic_year' => $request->batch_academic_year
        ]);

        return redirect()->route('batches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batch = Batch::findOrFail($id);
        return view('pages.batches.show', compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = Batch::findOrFail($id);

        $courses = Course::all();

        return view('pages.batches.edit', compact('batch', 'courses'));
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
            'batch_name' => 'required|min:3',
            'batch_number' => 'required|min:3',
            'batch_subject' => 'required|min:3',
            'batch_course' => 'required',
            'batch_academic_year' => 'required'
        ]);

        $batch = Batch::findOrFail($id);

        Batch::update([
            'batch_name' => $request->batch_name,
            'batch_number' => $request->batch_number,
            'batch_subject' => $request->batch_subject,
            'batch_course' => $request->batch_course,
            'batch_academic_year' => $request->batch_academic_year
        ]);

        return redirect()->route('batches.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Batch::destroy($id);

        return redirect()->route('batches.index');
    }
}
