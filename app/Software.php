<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Software extends Model {

	protected $table = 'software';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function installed_software()
	{
		return $this->hasMany('SoftwareInstalled', 'software_id');
	}

}