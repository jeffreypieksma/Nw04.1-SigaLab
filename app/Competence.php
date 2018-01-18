<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Education;
use App\Workshop;

class Competence extends Model
{
	protected $table = 'competences';

	public function educations(){
  	return $this->belongsToMany('App\Education','educations_comptences');
  }
  
  public function workshops(){
  	return $this->belongsToMany('App\Workshop','workshops_competences');
  }

}
