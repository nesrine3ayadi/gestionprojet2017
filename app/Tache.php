<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model {

	protected $table = 'tache';
	public $timestamps = true;

	public function contient()
	{
		return $this->hasMany('Logistique');
	}

	public function utilise()
	{
		return $this->hasMany('Materiel');
	}

	public function necessite()
	{
		return $this->hasMany('Consommable');
	}

	public function realiser()
	{
		return $this->belongsToMany('User');
	}

}