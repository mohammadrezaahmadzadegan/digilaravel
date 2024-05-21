<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
   public function index(){
    return view('index');
   }
   public function welcome(){
    return view('welcome');
   }

   public function login(){
    return view('login',['oneten'=>[1,2,3,4],'day'=>6]);
   }
   public function form(){
    return view('form',['array'=>request()->all()]);
   }
}
