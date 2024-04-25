<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function  home()
    // {
    //     return view("welcome") ;
    // }

    // public function user($id)
    // {
    //     return "this is my id ".$id;
    // }

   public function __invoke()
    {
        return "this is invoked";
    }

    
}
