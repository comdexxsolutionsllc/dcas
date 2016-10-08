<?php

Route::group(['middleware' => 'api', 'prefix' => 'api', 'namespace' => 'Modules\Api\Http\Controllers'], function()
{
    //Route::get('/', 'ApiController@index');

    Route::get('/user', function (Request $request)
    {
        return $request->user();
    })->middleware('auth:api');
});
