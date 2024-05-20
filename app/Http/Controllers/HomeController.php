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
    return view('login');
   }
   public function form(){
    return view('form',['array'=>request()->all()]);
   }
}
