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

Route::get('/', function ()
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/pages/home', function ()
{
    return View::make('pages.home');
});

Route::get('/register', function ()
{
    abort(405, 'Registration has been blocked.');
});

Route::get('/users/{id}/impersonate', '\Modules\Api\Http\Controllers\UserController@impersonate');
Route::get('/users/stop', '\Modules\Api\Http\Controllers\UserController@stopImpersonate');

Route::get('/machines/grid', 'MachinesController@grid');
Route::resource('/machines', 'MachinesController');