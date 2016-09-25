<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoftwareCategory extends Model {

    protected $table = 'software_category';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'deleted_at' ];


    public function software()
    {
        return $this->hasMany('\DCASDomain\Models\Software', 'category_id');
    }

}