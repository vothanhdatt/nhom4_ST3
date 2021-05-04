<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = 'post';
    public function comment(){
        return $this->hasMany('App\Comment','id_comment','id_post');
    }
}
