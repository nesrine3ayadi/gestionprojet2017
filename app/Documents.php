<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model {

	protected $table = 'documents';
	public $timestamps = true;

	public function realiser_par()
	{
		return $this->belongsTo('User');
	}

	public function appartenir()
	{
		return $this->belongsTo('Projet');
	}

}