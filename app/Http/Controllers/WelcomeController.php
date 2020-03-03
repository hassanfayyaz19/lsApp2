<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){

        $post=new post();
       $data= $post->data();
        /*$data=['Name'=>'Hassan Fayyaz'];*/
        return view('welcome',compact('data'));
    }
}
