<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'about_me', 
        'birth_date',
        'address',
        'gender',
        'phone',
        
        'avatar'
        
    ];
    //
    public function user()
    {
    	return $this->belongsTo('App\User','profile_id','id');
    }
}
