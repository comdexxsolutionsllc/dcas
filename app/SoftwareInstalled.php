<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoftwareInstalled extends Model {

	protected $table = 'software_installed';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}