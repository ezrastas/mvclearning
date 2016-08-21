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
});
*/
Route::get('index', 'PageController@index');
Route::resource('user', 'PageController');
/*
Route::get('index', 'PageController@index');
Route::get('/', 'PageController@index');
Route::get('/create', 'PageController@create');
Route::get('read', ['as' => 'read','uses' => 'PageController@read', function ($id) {
    return $id;
}]);
Route::get('update', ['as' => 'update','uses' => 'PageController@update', function ($id) {
    return $id;
}]);
Route::get('delete', ['as' => 'delete','uses' => 'PageController@delete', function ($id) {
    return $id;
}]);
Route::controller('admin', 'PageController', [
  'getIndex' => 'index',
  'getUsers' => 'read'
]);

  Route::get('create', 'PageController@create');
  Route::get('read', ['as' => 'read','uses' => 'PageController@read', function ($id) {
      return $id;
  }]);
  Route::get('update', ['as' => 'update','uses' => 'PageController@update', function ($id) {
      return $id;
  }]);
  Route::get('delete', ['as' => 'delete','uses' => 'PageController@delete', function ($id) {
      return $id;
  }]); */
