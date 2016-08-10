<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PageController@welcome');
Route::get('/create', 'PageController@create');
Route::get('/read', 'PageController@read');
Route::get('/update', 'PageController@update');
Route::get('/delete', 'PageController@delete');
Route::get('/mongo', 'PageController@mongo');
