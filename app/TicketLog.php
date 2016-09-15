<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketLog extends Model {

	protected $table = 'ticket_log';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}