<?php

namespace App\Http\Controllers;
use App\User;
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
    public function timeline(){
        $user = User::all();
        return view('user.timeline', ['user'=>$user]);
    }
}
