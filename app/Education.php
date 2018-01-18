<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competence;

class Education extends Model
{
  protected $table = 'educations';

  public function competences(){
  	return $this->belongsToMany('App\Competence','educations_competences');
  }

}