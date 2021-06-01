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
                echo("aaaaa");
                $name = $files->getClientOriginalName();
                $post->images= $name;              
        }
        else{
            $post->images= "";
        }
        $post->permission = 'public';
        $post->save();


        return redirect('home');
    }
}
