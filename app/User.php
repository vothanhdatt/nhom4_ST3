<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'email', 'password','profile_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //
    public function comment(){
        return $this->hasMany('App\Comment','id_comment','id');
    }
    //
    public function post(){
    	return $this->hasMany('App\Post','id_user','id');
    }
    //
    public function like(){
        return $this->hasMany('App\like','id_user','id');
    }
    //
    public function friend(){
    	return $this->belongstoMany('App\Friend');
    }
    //
    public function follow(){
    	return $this->belongstoMany('App\Follow');
    }
    //
    public  function profile(){
    	return $this->hasOne('App\Profile',"id","profile_id");
    }
}
