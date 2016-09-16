<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketComments extends Model {

	protected $table = 'ticket_comments';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function attachments()
	{
		return $this->hasMany('TicketCommentAttachments', 'comment_id');
	}

}