<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model {

	protected $table = 'modules';
	public $timestamps = true;

	public function appartenir()
	{
		return $this->belongsTo('Projet');
	}

}