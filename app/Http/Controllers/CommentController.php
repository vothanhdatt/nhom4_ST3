<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use App\User;
use Carbon\Carbon;
use App\Profile;
class CommentController extends Controller
{

    
    //
    public function createComment(Request $request, $id)
    {
        $userid = Auth::id();
   		$comment = new Comment;
        $comment->content = $request['content'];
        $comment->id_user = $userid;
        $comment->id_post = $id;
        $comment->id_share = 1;
    
        $comment->save();

        $date_comment = $comment->created_at;
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $result = $date_comment->diffForHumans($now);

        $user = Auth::user();
        $avatar = $user->profile->avatar;
        $name = $user->name;

        $numb = Post::find($id)->comment->count();

        $tempt = Comment::orderBy('id','desc')->get();
        $id_cmt = $tempt[0]->id;
        $data =['userid'=>$userid, 'content'=>$comment->content,'avatar'=>$avatar,'time'=>$result,'name'=>$name, 'numb'=>$numb, 'id_cmt'=>$id_cmt];
        return response()->json($data);        
    }
    //
    public function deleteComment($id){
        $commentdelete = Comment::find($id);

        $commentdelete->delete();

    }
    //
    public function editComment(Request $request, $id){
        $commentedit = Comment::find($id);
        $commentedit->content = $request['content'];
        $commentedit->save();
    }
}