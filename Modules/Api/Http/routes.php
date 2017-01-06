<?php
use Illuminate\Http\Request;

Route::group([
    'domain'     => 'api.sarahrenner.work',
    'middleware' => [ 'api', 'throttle' ],
    'namespace'  => 'Modules\Api\Http\Controllers'
], function ()
{
    Route::get('/', function ()
    {
        return App\Exceptions\DCASDomainErrorHelper::unauthorizedException();
    });
});

Route::group([
    'domain'     => 'api.sarahrenner.work',
    'middleware' => [ 'api', 'throttle' ],
    'prefix'     => 'v1',
    'namespace'  => 'Modules\Api\Http\Controllers'
], function ()
{
    Route::get('/', function ()
    {
        return App\Exceptions\DCASDomainErrorHelper::unauthorizedException();
    });
});

Route::group([
    'domain'     => 'api.sarahrenner.work',
    'middleware' => [ 'api', 'throttle', '\\Modules\\Api\\Http\\Middleware\\AddMetaInformation' ],
    'prefix'     => 'v1',
    'namespace'  => 'Modules\Api\Http\Controllers'
], function ()
{
    Route::get('/user', function (Request $request)
    {
        $full_name = $request->user()->first_name . " " . $request->user()->last_name;

        return [
            'id'        => $request->user()->id,
            'full_name' => $full_name,
            'username'  => $request->user()->username,
            'email'     => $request->user()->email
        ];

    })->middleware('auth:api');

    Route::resource('machine', 'MachineController');
});
