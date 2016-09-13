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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/pages/home', function()
{
    return View::make('pages.home');
});

Route::get('/accesslevels', 'AccessLevelsController@getIndex');
Route::get('/accesslevels/add', 'AccessLevelsController@getAdd');
Route::post('/accesslevels/save', 'AccessLevelsController@postSave');
Route::get('/accesslevels/getGrid', 'AccessLevelsController@getGrid');