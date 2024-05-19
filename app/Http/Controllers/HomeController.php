<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){

         return view('foo');
     }
    public function foo(){
       $array = [1,3,4,5];
        return view('foo',$array);
    }
    public function formsubmit(){
        return $_POST;
    }
}
