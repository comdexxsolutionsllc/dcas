<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketWorkers extends Model {

    protected $table = 'ticket_workers';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];

}