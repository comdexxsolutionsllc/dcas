<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MachineNotes extends Model {

	protected $table = 'machine_notes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function attachments()
	{
		return $this->hasMany('MachineNoteAttachments', 'note_id');
	}

}