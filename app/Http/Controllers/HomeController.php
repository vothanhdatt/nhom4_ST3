<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Profile;
use App\Friend;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()){
            $post = Post::where('permission', '!=', 'private')->orderBy('id','desc')->get();
            $frwait = Friend::where('id_accept', Auth::user()->id)->where('status',0)->get();
            $profile = Profile::where('id', Auth::user()->profile_id)->first();
            $alluser=User::all();
       
        return view('user.newsfeed',['alluser'=>$alluser,'frwait'=>$frwait,'post'=>$post,'profile'=>$profile]);
        }
        else{
            $post = Post::where('permission', '!=', 'private')->orderBy('id','desc')->get();
        
        //$profile = Profile::where('id', Auth::user()->profile_id)->first();
       
        return view('user.newsfeed',['post'=>$post]);
        }
        
    }
    
}
