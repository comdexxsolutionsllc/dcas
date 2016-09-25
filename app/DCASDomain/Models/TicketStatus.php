<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketStatus extends Model {

    protected $table = 'ticket_status';

    public $timestamps = true;


    public function tickets()
    {
        return $this->hasMany('\DCASDomain\Models\Ticket', 'status_id');
    }

}