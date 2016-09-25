<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Software extends Model {

    protected $table = 'software';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];


    public function installed_software()
    {
        return $this->hasMany('\DCASDomain\Models\SoftwareInstalled', 'software_id');
    }

}