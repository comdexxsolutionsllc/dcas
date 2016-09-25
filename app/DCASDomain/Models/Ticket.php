<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model {

    protected $table = 'tickets';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];


    public function log()
    {
        return $this->hasMany('\DCASDomain\Models\TicketLog', 'ticket_id');
    }


    public function comments()
    {
        return $this->hasMany('\DCASDomain\Models\TicketComments', 'ticket_id');
    }


    public function workers()
    {
        return $this->hasMany('\DCASDomain\Models\TicketWorkers', 'ticket_id');
    }


    public function attachments()
    {
        return $this->hasMany('\DCASDomain\Models\TicketAttachments', 'ticket_id');
    }

}