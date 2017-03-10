<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consommable extends Model {

	protected $table = 'consommable';
	public $timestamps = true;

	public function appartenir()
	{
		return $this->belongsTo('Tache');
	}

}