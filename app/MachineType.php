<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MachineType extends Model {

	protected $table = 'machine_types';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function machine()
	{
		return $this->hasMany('Machine', 'type_id');
	}

}