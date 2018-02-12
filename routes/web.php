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

Route::get('/', 'StudentsController@index');

Route::get('/enquiry', 'EnquriesController@show');

Route::get('/leads', 'LeadsController@show');

// Students
Route::resource('/students', 'StudentsController');

// Courses
Route::resource('/courses', 'CoursesController');

// Bacthes
Route::resource('/batches', 'BatchesController');

// emails
Route::resource('/emails', 'EmailsController');

// Email Page (Front End)
// Route::get('/communications/email', 'CommunicationsController@email');

// Sending email (action email form)
// Route::post('/communications/email/send', 'CommunicationsController@emailSend');

// SMS Page (Front End)
Route::get('/communications/sms', 'CommunicationsController@sms');

// Sending SMS (action SMS form)
Route::post('/communications/sms/send', 'CommunicationsController@smsSend');

// Authentification (Login, Register, Forgot Password)
Auth::routes();

// Profile Pages
Route::get('/profile', 'ProfileController@show');

// Logout from session
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
});

// Home Page
Route::get('/home', 'HomeController@index')->name('home');
