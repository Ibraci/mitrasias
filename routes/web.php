<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// import namespace
use App\Models\Course;
use App\Models\Student;

Route::get('/', function () {
    $courses = Course::all();

    return view('pages.home')->withCourses($courses);
});

Route::get('/enquiry', function () {

    return view('pages.enquiry.enquiry');
});

Route::get('/leads', function () {

    return view('pages.enquiry.leads');
});

Route::get('/students', function () {
    $students = Student::all();

    return view('pages.students.students-list')->withStudents($students);
});

Route::get('/welcome', function () {
    return view('welcome');
});
