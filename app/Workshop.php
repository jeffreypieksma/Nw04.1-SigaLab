<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
	protected $table = 'workshops';

	public function competences(){
  	return $this->belongsToMany('App\Competence','workshops_competences');
  }

}
