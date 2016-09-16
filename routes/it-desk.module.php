<?php 
use DCASDomain\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
//
//
Route::group(['prefix' => 'supportdesk'], function() {
    Route::resource('machine', 'MachineController');
    Route::resource('machinetype', 'MachineTypeController');
    Route::resource('ticket', 'TicketController');
    Route::resource('machinelog', 'MachineLogController');
    Route::resource('ticketlog', 'TicketLogController');
    Route::resource('ticketcomments', 'TicketCommentsController');
    Route::resource('user', 'UserController');
    Route::resource('ticketworkers', 'TicketWorkersController');
    Route::resource('software', 'SoftwareController');
    Route::resource('softwarecategory', 'SoftwareCategoryController');
    Route::resource('softwareinstalled', 'SoftwareInstalledController');
    Route::resource('machinenotes', 'MachineNotesController');
    Route::resource('machinenoteattachments', 'MachineNoteAttachmentsController');
    Route::resource('ticketattachments', 'TicketAttachmentsController');
    Route::resource('ticketcommentattachments', 'TicketCommentAttachmentsController');
    Route::resource('ticketstatus', 'TicketStatusController');
    Route::resource('location', 'LocationController');
    Route::resource('locationgroup', 'LocationGroupController');
});
