<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Group extends Model
{
	protected $table = 'groups';

  public function members(){
		return $this->hasMany('App\Member');
	}
}