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
    return view('welcome');
});


//-------------User ROUTE-----------------//


//Route to book a lesson, increment the number of suscribed in a lesson table
Route::get('lessonBooked/{user_id}/{lesson_id}','UserController@booking');

// Route to unbook a lesson
Route::get('lessonUnbooked/{user_id}/{lesson_id}','UserController@unbooking');


/************** LESSON ROUTE ***************/
// Route to create a lesson
Route::get('lesson','LessonController@index');

// Route to add it the database
Route::post('addLesson','LessonController@addLesson');

Route::resource('lessons','LessonController');

/*************** Laravel Authentification routes ******************/
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/i', 'LessonController@index');
