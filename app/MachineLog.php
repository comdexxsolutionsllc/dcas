<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MachineLog extends Model {

	protected $table = 'machine_log';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}