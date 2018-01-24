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

Route::get('/', function () {
    DB::table('courses')->insert([
        ['course_name' => 'Epoche Test Series Program Offline', 'course_fees' => '47000'],
        ['course_name' => 'Epoche Test Series Program Online', 'course_fees' => '47000'],
        ['course_name' => 'Ethics Classroom Offline', 'course_fees' => '47000'],
        ['course_name' => 'Ethics Classroom Online', 'course_fees' => '47000'],
        ['course_name' => 'GS Foundation Batch 2018 Offline', 'course_fees' => '47000'],
        ['course_name' => 'GS Foundation Batch 2018 Online', 'course_fees' => '47000'],
        ['course_name' => 'Main Test Series Batch 2018 Offline', 'course_fees' => '47000'],
        ['course_name' => 'Main Test Series Batch 2018 Online', 'course_fees' => '47000'],
        ['course_name' => 'Philosophy Classroom Program Offline Evening', 'course_fees' => '47000'],
        ['course_name' => 'Philosophy Classroom Program Online Evening', 'course_fees' => '47000'],
        ['course_name' => 'Philosophy Classroom Program Offline Morning', 'course_fees' => '47000'],
        ['course_name' => 'Philosophy Classroom Program Online Morning', 'course_fees' => '47000'],
        ['course_name' => 'Prelims Test Series 2018', 'course_fees' => '47000']
    ]);

    // $courses = App\Models\Course::all();
    //
    // return view('pages.home')->withCourses($courses);
});

Route::get('/enquiry', function () {

    return view('pages.enquiry.enquiry');
});

Route::get('/welcome', function () {
    return view('welcome');
});
