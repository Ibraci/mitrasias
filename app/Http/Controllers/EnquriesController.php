<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers \Controller;

class EnquriesController extends Controller
{
    public function show ()
    {
        return view('pages.enquiry.enquiry');
    }
}
