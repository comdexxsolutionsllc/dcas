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

Route::get('/register', function() {
    abort(405, 'Registration has been blocked.');
});

Route::get('/test', function ()
{
    $output = [];

    foreach (App\User::find(400)->machines as $machine)
    {
        $output[] .= $machine['machine_name'];
    }

    return [
        'user'                   => App\User::find(400)->username,
        'user_machines' => $output
    ];
});
