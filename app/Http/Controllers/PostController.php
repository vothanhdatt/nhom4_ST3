<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    //
    public function createPost(Request $request){
        $user_id = Auth::id();
        $post = new Post;

        if ($request->text==null) {
            $post->content = "";
        }
        else {
            $post->content = $request->text;
        }
        
        $post->id_user = $user_id; 
        
        if($request->hasFile('fileUpload')){
            
            $files = $request->file('fileUpload');
                $name = $files->getClientOriginalName();
                $post->images= $name;   
                $files->move('../public/images/resources', $name);        
        }
        else{
            if($request->camera_img != ""){
                $post->images= $request->camera_img;   
            }
            else{
                $post->images= "";
            }
            
        }
        $post->permission = $request->input('permission');
        
        $post->save();


        return back();
    }
    //
    public function deletePost($id){
        $post = Post::find($id);

        $post->delete();
        return back()->with('success','Dữ liệu xóa thành công.');
    }
    //
    public function editPost(Request $request, $id){
       $newPost = Post::find($id);
       $newPost->content = $request['content'];
       if($request['images'] != null){
        $newPost->images = $request['images'];
       }
       else{
        $newPost->images = "";
       }
       $newPost->permission = $request['permission'];
       $newPost->save();
    }
}