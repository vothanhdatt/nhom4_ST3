<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use App\User;
class LikeController extends Controller
{
    //
    public function likePost($pid){

    		
        $user_id = Auth::id();
        $index = 0;
        $likes = Like::where('id_post', $pid)->get();
        $avatar = "";
        foreach($likes as $like){
            if($like->id_user==$user_id){
                $index = 1; 
                $like->delete();
                break; 
            }
        }

        if($index == 0){
            $like = new Like;
            $like->id_post = $pid;
            
            $like->id_user = $user_id;
            $like->save();
            //$avatar = Auth::user()->profile->avatar_path;
        }

        $numb = Post::find($pid)->like->count();
        $data =['numb'=>$numb, 'index'=>$index, 'avatar'=>$avatar, 'uid'=>$user_id];

        
        return response()->json($data);
        
 }
}
