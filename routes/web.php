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

Route::get('/', 'TempController@index');
Route::get('/contact-me', 'TempController@contact');
Route::get('/google14d3a8b9186efa46.html', 'TempController@google'); 