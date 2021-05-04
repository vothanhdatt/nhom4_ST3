<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Comment;

class PagesController extends Controller
{
    
public function cmt($id="pages.home"){
    $cmt = Comment::all();
    $post = post::all();
    return view($id,['cmt'=>$cmt],['post'=>$post]);     
}

    // public function post(){
    //     $post = post::all();
    //     return view('pages.home',['post'=>$post]);
    // }
}
