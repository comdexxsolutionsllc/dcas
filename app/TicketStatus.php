<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketStatus extends Model {

	protected $table = 'ticket_status';
	public $timestamps = true;

	public function tickets()
	{
		return $this->hasMany('Ticket', 'status_id');
	}

}