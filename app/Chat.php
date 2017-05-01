<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model {

	protected $table = 'chat';
	public $timestamps = true;
	protected $fillable=['contenu','emetteur','recepteur'];


	public function echanger()
	{
		return $this->belongsTo('User');
	}

}