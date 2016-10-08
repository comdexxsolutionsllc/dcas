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

Route::get('/users/{id}/impersonate', '\DCASDomain\Http\Controllers\UserController@impersonate');
Route::get('/users/stop', '\DCASDomain\Http\Controllers\UserController@stopImpersonate');

//Route::get('/users-test', function ()
//{
//    return \Cache::remember('users.all.transform', Time::minute, function ()
//    {
//        return \Fractal::collection(App\User::all())->transformWith(new DCASDomain\Transformers\UserTransformer)->toArray();
//    });
//});

Route::group([ 'middleware' => 'impersonate' ], function ()
{
    //Route::get('test_impersonate', function ()
    //{
    //    return [
    //        'AuthUser'          => Auth::user(),
    //        'AuthImpersonating' => Auth::user()->isImpersonating()
    //    ];
    //});
});
