<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Member extends Model
{
	protected $table = 'members';

  public function group(){
		return $this->belongsTo('App\Group');
	}


}
