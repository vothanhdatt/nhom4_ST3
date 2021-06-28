<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Friend;
use App\Follow;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{


    public function index($id = 'newsfeed')
    {
        
        if($id == 'login' || 'register') {
            return view('auth.' . $id);
        }
        else {
            return view('user.' . $id);
        }
        
    } 
    public function timeline($id){
        $user = User::find($id);
        $alluser=User::all();
        $post = Post::where('id_user', $id)->orderBy('id','desc')->get();
        $profile = Profile::where('id', $user->profile_id)->first();
        $followers = Follow::where('id_user',$id)->get();
        $following = Follow::where('id_follow', $id)->get();
        if(Auth::user()){
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            $profile = Profile::where('id', Auth::user()->profile_id)->first();
            $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->get();
            $friendAC = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->get();
            $follow = Follow::where('id_follow', Auth::user()->id)->where('id_user',$id)->get();
            $followers = Follow::where('id_user',$id)->get();
            $following = Follow::where('id_follow', $id)->get();
            
            return view('user.timeline', ['alluser'=>$alluser,'frwait'=>$frwait,'profile'=>$profile, 'user'=>$user,'post'=>$post, 'friendRQ'=>$friendRQ, 'friendAC'=>$friendAC, 'follow'=>$follow, 'followers'=>$followers, 'following'=>$following]);
        }
        else{
            return view('user.timeline', ['alluser'=>$alluser,'profile'=>$profile,'user'=>$user,'post'=>$post,'followers'=>$followers, 'following'=>$following]);
        }
        
    }
    public function about($id){
        $user = User::find($id);
        $alluser=User::all();
        $post = Post::where('id_user', $id)->orderBy('id','desc')->get();
        $profile = Profile::where('id', $user->profile_id)->first();
        $followers = Follow::where('id_user',$id)->get();
        $following = Follow::where('id_follow', $id)->get();
        if(Auth::user()){
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->get();
            $friendAC = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->get();
            $follow = Follow::where('id_follow', Auth::user()->id)->where('id_user',$id)->get();
            
            
            return view('user.about', ['alluser'=>$alluser,'frwait'=>$frwait,'profile'=>$profile,'user'=>$user,'post'=>$post, 'friendRQ'=>$friendRQ, 'friendAC'=>$friendAC, 'follow'=>$follow, 'followers'=>$followers, 'following'=>$following]);
        }
        else{
            return view('user.about', ['profile'=>$profile,'user'=>$user,'post'=>$post,'followers'=>$followers, 'following'=>$following]);
        }
        
    }
    public function friends($id){
        //$profile = Profile::where('id', Auth::user()->profile_id)->first();
        $user = User::find($id);
        
        $post = Post::where('id_user', $id)->orderBy('id','desc')->get();
        $profile = Profile::where('id', $user->profile_id)->first();
        $followers = Follow::where('id_user',$id)->get();
        $friend1 = Friend::where('id_accept',$id)->where('status', 1)->get();
        $friend = Friend::where('id_request',$id)->where('status', 1)->get();
        $following = Follow::where('id_follow', $id)->get();
        $alluser=User::all();
        $slimages = Post::where('id_user', $id)->where('images','!=','')->orderBy('id','desc')->get();
        if(Auth::user()){
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->get();
            $friendAC = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->get();
            $follow = Follow::where('id_follow', Auth::user()->id)->where('id_user',$id)->get();

            
            return view('user.friends', ['frwait'=>$frwait,'slimages'=>$slimages,'alluser'=>$alluser,'friend'=>$friend,'friend1'=>$friend1,'profile'=>$profile,'user'=>$user,'post'=>$post, 'friendRQ'=>$friendRQ, 'friendAC'=>$friendAC, 'follow'=>$follow, 'followers'=>$followers, 'following'=>$following]);
        }
        else{
            return view('user.friends', ['slimages'=>$slimages,'alluser'=>$alluser,'friend'=>$friend,'friend1'=>$friend1,'profile'=>$profile,'followers'=>$followers, 'following'=>$following,'user'=>$user,'post'=>$post]);
        }
        
    }
    public function photos($id){
        $user = User::find($id);
        $alluser=User::all();
        //$profile = Profile::where('id', Auth::user()->profile_id)->first();
        $post = Post::where('id_user', $id)->where('images','!=','')->orderBy('id','desc')->get();
        $profile = Profile::where('id', $user->profile_id)->first();
        $followers = Follow::where('id_user',$id)->get();
        $following = Follow::where('id_follow', $id)->get();
        if(Auth::user()){
            $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->get();
            $friendAC = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->get();
            $follow = Follow::where('id_follow', Auth::user()->id)->where('id_user',$id)->get();
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            
            return view('user.photos', ['alluser'=>$alluser,'frwait'=>$frwait,'profile'=>$profile,'user'=>$user,'post'=>$post, 'friendRQ'=>$friendRQ, 'friendAC'=>$friendAC, 'follow'=>$follow, 'followers'=>$followers, 'following'=>$following]);
        }
        else{
            return view('user.photos', ['profile'=>$profile,'followers'=>$followers, 'following'=>$following,'user'=>$user,'post'=>$post]);
        }
        
    }
    public function setting($id){
        $user = User::find($id);
        $alluser=User::all();
        $profile = Profile::where('id', Auth::user()->profile_id)->first();
        $post = Post::where('id_user', $id)->where('images','!=','')->orderBy('id','desc')->get();
        $profile = Profile::where('id', $user->profile_id)->first();
        $followers = Follow::where('id_user',$id)->get();
        $following = Follow::where('id_follow', $id)->get();
        if(Auth::user()){
            $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->get();
            $friendAC = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->get();
            $follow = Follow::where('id_follow', Auth::user()->id)->where('id_user',$id)->get();
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            
            return view('user.setting', ['alluser'=>$alluser,'frwait'=>$frwait,'profile'=>$profile,'user'=>$user,'post'=>$post, 'friendRQ'=>$friendRQ, 'friendAC'=>$friendAC, 'follow'=>$follow, 'followers'=>$followers, 'following'=>$following]);
        }
        else{
            return view('user.setting', ['alluser'=>$alluser,'user'=>$user,'post'=>$post]);
        }
        
    }

    public function editprofile(Request $request, $id){
        $profile = Profile::where('id',Auth::user()->profile_id)->first();
        $profile->about_me = $request['aboutme'];
        $profile->address = $request['address'];
        $profile->gender = $request['valuegender'];
        if($request['edit-avatar'] != null){
            $profile->avatar = $request['edit-avatar'];
           }
        // if($request->hasFile('.edit-avatar')){
            
        //     $files = $request->file('edit-avatar');
        //         $name = $files->getClientOriginalName();
        //         $profile->avatar= $name;   
        //         $files->move('../public/images/resources', $name);        
        // }
       
        $profile->save();
        return back();
    }
    public function search(Request $request){
        $key = $request['key'];
        $alluser=User::all();
        $searchuser = User::where('name','like','%'.$key.'%')->get();
        $searchpost = Post::where('content','like','%'.$key.'%')->get();
        
        if(Auth::user()){
            
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            
            return view('user.search', ['searchpost'=>$searchpost,'searchuser'=>$searchuser,'alluser'=>$alluser,'frwait'=>$frwait]);
        }
        return view('user.search',['key'=>$key,'searchpost'=>$searchpost,'searchuser'=>$searchuser,'alluser'=>$alluser]);
    }

    public function admin(){
        $alluser=User::all();
        $post = Post::all();
        if(Auth::user()){
            
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            
            return view('user.admin', ['post'=>$post, 'alluser'=>$alluser,'frwait'=>$frwait]);
        }
        return view('user.admin');
    }
    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
