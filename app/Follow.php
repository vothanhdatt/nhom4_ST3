<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    public function user(){
    	return $this->belongstoMany('App\User');
    }
}
