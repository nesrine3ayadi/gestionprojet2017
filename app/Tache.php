<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model {

	protected $table = 'tache';
	public $timestamps = true;
	protected $fillable=['nomTache','description_tache','duree','statut_tache','date_debut_tache','date_fin_tache','id_module','cout','priorite'];

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