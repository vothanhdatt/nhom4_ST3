<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function comment(){
        return $this->hasMany('App\Comment','id_post','id');
    }
    //
    public function user(){
        return $this->belongsTo('App\User','id_user','id');
    }
    //
    public function like() {
        return $this->hasMany('App\Like', 'id_post', 'id');
    }
   
}
