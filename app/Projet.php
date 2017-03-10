<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model {

	protected $table = 'projet';
	public $timestamps = true;

	public function composer()
	{
		return $this->hasMany('Modules');
	}

	public function contient()
	{
		return $this->hasMany('Documents');
	}

	public function creer()
	{
		return $this->belongsTo('User');
	}

	public function avoir()
	{
		return $this->hasMany('Service');
	}

}