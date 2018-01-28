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

Route::get('/', 'StudentsController@index');

Route::get('/enquiry', 'EnquriesController@show');

Route::get('/leads', 'LeadsController@show');

Route::resource('/students', 'StudentsController');

Route::resource('/courses', 'CoursesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
