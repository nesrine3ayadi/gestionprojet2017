<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model {

	protected $table = 'reunion';
	public $timestamps = true;

	public function composer()
	{
		return $this->hasMany('User');
	}

}