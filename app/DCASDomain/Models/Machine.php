<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Machine extends Model {

	protected $table = 'machines';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function machine_log()
	{
		return $this->hasMany('MachineLog', 'machine_id');
	}

	public function software()
	{
		return $this->hasMany('SoftwareInstalled', 'machine_id');
	}

	public function machine_notes()
	{
		return $this->hasMany('MachineNotes', 'machine_id');
	}

	public function location()
	{
		return $this->hasOne('Location', 'id', 'location_id');
	}

}