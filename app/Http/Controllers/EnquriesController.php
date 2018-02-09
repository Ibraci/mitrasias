<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers \Controller;

class EnquriesController extends Controller
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
        return view('pages.enquiry.enquiry');
    }
}
