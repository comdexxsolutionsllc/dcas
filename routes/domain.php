<?php

/*
|--------------------------------------------------------------------------
| Domain Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * @note This route file has to be loaded before all others.
 */

Route::group([
    'middleware' => 'web',
    'namespace'  => 'DCASDomain\Http\Controllers',
    'domain'     => 'internal.sarahrenner.work'
], function ()
{
    Route::get('/', function ()
    {
        return "Hello, ADMINISTRATOR";
    });
});

Route::group([
    'middleware' => 'web',
    'namespace'  => 'DCASDomain\Http\Controllers',
    'domain'     => 'panel.sarahrenner.work'
], function ()
{
    Route::get('/', function ()
    {
        return "Hello, REGULAR USER";
    });
});

Route::group([
    'middleware' => 'web',
    'namespace'  => 'DCASDomain\Http\Controllers',
    'domain'     => '{username}.sarahrenner.work'
], function ()
{
    Route::get('/', function ($username)
    {
        return "Hello, $username";
    });
});