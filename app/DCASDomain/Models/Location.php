<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model {

	protected $table = 'locations';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function group()
	{
		return $this->hasOne('LocationGroup', 'id', 'group_id');
	}

	public function machines()
	{
		return $this->hasMany('Machine', 'location_id', 'id');
	}

}
