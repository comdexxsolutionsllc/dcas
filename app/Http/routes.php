<?php
k
        

// Begin Machine Routes

Route::any('api/machine', 'ApiController@machineData');
Route::any('api/machine-vue', 'ApiController@machineVueData');

Route::resource('machine', 'MachineController');

// End Machine Routes        

// Begin Software Routes

Route::any('api/software', 'ApiController@softwareData');
Route::any('api/software-vue', 'ApiController@softwareVueData');

Route::resource('software', 'SoftwareController');

// End Software Routes        

// Begin Ticket Routes

Route::any('api/ticket', 'ApiController@ticketData');
Route::any('api/ticket-vue', 'ApiController@ticketVueData');

Route::resource('ticket', 'TicketController');

// End Ticket Routes