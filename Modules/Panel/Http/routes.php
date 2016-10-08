<?php

Route::group([
    'domain'     => 'panel.sarahrenner.work',
    'middleware' => 'web',
    'namespace'  => 'Modules\Panel\Http\Controllers'
], function ()
{
    Route::get('/', 'PanelController@index');
});
