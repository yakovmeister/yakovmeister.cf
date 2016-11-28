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
Route::get('/suggest', 'TempController@suggest');
Route::get('/not-found', 'TempController@cantSaveHyrule');
Route::get('/google14d3a8b9186efa46.html', 'TempController@google'); 
Route::get('/weebo', 'TempController@weebo');
/** POST requests **/
Route::post('/suggest', 'TempController@postSuggest');

Route::group(['prefix' => 'suggestions'], function() {
	Route::get('/view', 'TempController@viewSuggestions');
	Route::get('/open/{id}', 'TempController@openSuggestion');
});