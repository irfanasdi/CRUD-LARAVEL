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


Route::get('/', function (){
	return view('welcome');
});

Route::get('/items', 'ItemController@index');

Route::get('/pertanyaan/create','PertanyaanController@create');

Route::POST('/items', 'ItemController@store');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::POST('/pertanyaan', 'PertanyaanController@store');