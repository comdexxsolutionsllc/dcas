<?php

Route::group(['domain' => 'api.sarahrenner.work', 'middleware' => 'api', 'prefix' => 'v1', 'namespace' => 'Modules\Api\Http\Controllers'], function()
{
    Route::get('/', function () {
        throw new \Illuminate\Validation\UnauthorizedException();
    });

    Route::get('/user', function (Request $request)
    {
        return $request->user();
    })->middleware('auth:api');

    Route::resource('machine', 'MachineController');
});
