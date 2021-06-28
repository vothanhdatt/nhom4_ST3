<?php

namespace App\Http\Controllers;
use App\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    //
    public function follow(Request $request, $id)
    {
        $follow = new Follow;
        $follow->id_follow = $request->idfollow;
        $follow->id_user = $id;
        $follow->save();
    }

    public function unfollow(Request $request, $id)
    {
        $follow = Follow::where('id_follow',$request->idfollow)->where('id_user',$id)->first();
        $follow->delete();
    }
}
