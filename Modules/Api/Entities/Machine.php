<?php

namespace Modules\Api\Entities;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model {

    protected $fillable = [ 'type_id', 'user_id', 'location_id', 'machine_name' ];
}
