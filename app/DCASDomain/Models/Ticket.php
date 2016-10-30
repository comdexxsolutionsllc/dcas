<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model {

    protected $table = 'tickets';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];

}