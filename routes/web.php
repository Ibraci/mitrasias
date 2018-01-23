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

    // $user = DB::table('employees')->where('id', 3)->get();

    // $name = $user['name'];
    // dd($user);

    return view('pages.home');
});

Route::get('/enquiry', function () {

    return view('pages.enquiry.enquiry');
});

Route::get('/welcome', function () {
    return view('welcome');
});
