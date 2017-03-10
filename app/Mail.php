<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model {

	protected $table = 'mail';
	public $timestamps = true;

	public function echanger()
	{
		return $this->belongsTo('User');
	}

}