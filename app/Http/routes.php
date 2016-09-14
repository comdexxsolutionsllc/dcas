<?php
/**
 * Multi-domain routes
 */
//this is for the main default domain that I host my main site/CMS
//Route::group(['domain' => 'maindomainforcms.com'], function(){
//    Route::get('/', function(){ return 'this is the index page'; });
//});
//
//this catches the rest of the domains and all their pages:
//Route::any('{all}', 'SitesPublicController@index')->where('all', '.*');