<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use App\User;
use Carbon\Carbon;
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
        $avatar = $user->avatar;
        $name = $user->name;

        $numb = Post::find($id)->comment->count();

        //$data =['content'=>$comment->content,'avatar'=>$avatar,'time'=>$result,'name'=>$name, 'numb'=>$numb];
        $data =['content'=>$comment->content,'avatar'=>$avatar,'time'=>$result,'name'=>$name, 'numb'=>$numb];
        return response()->json($data);
        //return back();
        
    }
    //
    public function deleteComment($id){
        $comment = Comment::find($id);

        $comment->delete();
        return redirect()->action('HomeController@index')->with('success','Dữ liệu xóa thành công.');
    }
}