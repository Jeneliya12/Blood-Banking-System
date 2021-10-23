<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	public function country(){
	return $this->belongsTo('App\Country'); //Each of these city belongs country one
	}
	public function donors(){
	return $this->hasMany('App\Donor'); //Each of the donors belongs to one of the state
	}
}
