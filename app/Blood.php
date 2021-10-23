<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $guarded= []; 
    public function donor()
    {
    	return $this->hasMany('App\Donor');
    	return $this->hasMany(Donor::class);
    }
}
