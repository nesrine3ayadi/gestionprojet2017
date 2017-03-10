<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logistique extends Model {

	protected $table = 'logistique';
	public $timestamps = true;

	public function appartenir()
	{
		return $this->belongsTo('Tache');
	}

}