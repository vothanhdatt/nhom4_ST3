<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhihiController extends Controller
{
    //
  
    public function index(){
        return view('welcome');
    }
    /*
    public function index1($id="Không có ID"){
        return 'In ra ở đây nè má:' .$id;
    }
    */
    public function index1($id="welcome"){
            return view($id);     
    }
    public function admin(){
        return 'Chào Mày!!!';
    }
    public function login(){
        return 'Chao';
    }
    
}
