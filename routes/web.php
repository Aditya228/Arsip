<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('karyawan','KaryawanController');

Route::get('/','KaryawanController@index');
Route::post('/','KaryawanController@search');
Route::get('/pivot', function () {
    return view('karyawan.pivot');
});
// Route::get('/','PrintController@index');
Route::get('/printPreview','PrintController@printPreview');