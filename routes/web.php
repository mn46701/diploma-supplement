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
    return view('welcome', [
        'subjects' => \App\Models\Subject::all()
    ]);
});


Route::get('/marking/{subject_id}', 'SubjectController@index');
Route::post('/marking', 'MarkingController@marking')->name('marking');
Route::get('/marking-subjects', 'MarkingController@markingSubjects')->name('marking-subjects');
Route::get('/students-list', 'ReportsController@studentList');

Route::get('/report/{student_id}', 'ReportsController@report');
