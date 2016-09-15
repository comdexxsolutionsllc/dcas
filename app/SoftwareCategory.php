<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoftwareCategory extends Model {

	protected $table = 'software_category';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function software()
	{
		return $this->hasMany('Software', 'category_id');
	}

}