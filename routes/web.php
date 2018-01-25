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
use App\Models\Student;

Route::get('/', 'CoursesController@show');

Route::get('/enquiry', 'EnquriesController@show');

Route::get('/leads', 'LeadsController@show');

Route::get('/students', 'StudentsListController@show');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
