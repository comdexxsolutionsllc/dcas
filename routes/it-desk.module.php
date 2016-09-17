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


/**
 * Location
 */
Route::resource('location', 'LocationController');
Route::resource('locationgroup', 'LocationGroupController');

/**
 * Machine
 */
Route::resource('machine', 'MachineController');
Route::resource('machinelog', 'MachineLogController');
Route::resource('machinenotes', 'MachineNotesController');
Route::resource('machinenoteattachments', 'MachineNoteAttachmentsController');
Route::resource('machinetype', 'MachineTypeController');

/**
 * Software
 */
Route::resource('software', 'SoftwareController');
Route::resource('softwarecategory', 'SoftwareCategoryController');
Route::resource('softwareinstalled', 'SoftwareInstalledController');

/**
 * Ticket
 */
Route::resource('ticket', 'TicketController');
Route::resource('ticketattachments', 'TicketAttachmentsController');
Route::resource('ticketcomments', 'TicketCommentsController');
Route::resource('ticketcommentattachments', 'TicketCommentAttachmentsController');
Route::resource('ticketlog', 'TicketLogController');
Route::resource('ticketstatus', 'TicketStatusController');
Route::resource('ticketworkers', 'TicketWorkersController');

/**
 * User
 */
Route::resource('user', 'UserController');
