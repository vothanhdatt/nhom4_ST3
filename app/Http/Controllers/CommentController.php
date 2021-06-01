<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    //
    public function createComment(Request $request, $id)
    {
    	$request->validate([
            'text'=>'required',
        ]);
        
        $userid = Auth::id();
   		$comment = new Comment;
        $comment->content = $request['text'];
        $comment->id_user = $userid;
        $comment->id_post = $id;
        $comment->id_share = 1;
    
        $comment->save();

        // $date_comment = $comment->created_at;
        // $now = Carbon::now('Asia/Ho_Chi_Minh');
        // $result = $date_comment->diffForHumans($now);

        // $user = Auth::user();
        // $avatar = $user->profile->avatar_path;
        // $name = $user->last_name . " " . $user->first_name;

        // $numb = Posts::find($pid)->comment->count();

        // $data =['content'=>$comment->content,'avatar'=>$avatar,'time'=>$result,'name'=>$name, 'numb'=>$numb];
        
        // return $data;
        return back();
        
    }
}
