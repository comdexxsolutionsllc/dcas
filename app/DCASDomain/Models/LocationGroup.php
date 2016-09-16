<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationGroup extends Model {

	protected $table = 'location_groups';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function locations()
	{
		return $this->hasMany('Location', 'group_id', 'id');
	}

}