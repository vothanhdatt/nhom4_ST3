<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //

    public function comment(){
        return $this->hasMany('App\Comment','id_comment','id_post');
    }
}
