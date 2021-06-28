<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friend;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    //
    public function addFriend($id){
        $friend = new Friend;
        $friend->id_request = Auth::user()->id;
        $friend->id_accept = $id;
        $friend->status = 0;
        $friend->save();
        $friendRQ = Friend::where('id_request',Auth::user()->id)->where('id_accept', $id)->first();
        $idfriend = $friendRQ->id;
        return($idfriend);
    }
     //
     public function deleteFriend($id){
        $friend = Friend::find($id);
        $friend->delete();
        $a = Friend::all();
        return($a);
    }
    //
    public function acceptFriend($id){
        $friend = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->where('status', 0)->first();
        $friend->status = 1;
        $friend->save();
        $a = Friend::all();
        return($a);
    }
    //
    public function unFriend($id){
        if($friend = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->where('status', 1)->first()){
            $friend->delete();
        }
        if($friend = Friend::where('id_accept',$id)->where('id_request', Auth::user()->id)->where('status', 1)->first()){
            $friend->delete();
        }
        $a = Friend::all();
        return($a);
    }
    //
    public function removeRequest($id){
        if($friend = Friend::where('id_request',$id)->where('id_accept', Auth::user()->id)->where('status', 0)->first()){
            $friend->delete();
        }
        if($friend = Friend::where('id_accept',$id)->where('id_request', Auth::user()->id)->where('status', 0)->first()){
            $friend->delete();
        }
        $a = Friend::all();
        return($a);
    }
}
