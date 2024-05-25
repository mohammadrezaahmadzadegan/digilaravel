<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class HomeController extends Controller
{
    public $globali;
    public function __construct(Request $request)
    {
       $this->globali = $request->all();
    }
   public function index(){
    // $result = app(Request::class);
    // dd($result->all());
    //dd(request()->all());
    // echo $id;
    // var_dump($request->all());
    // $hh->va();
    var_dump($this->globali);
   }
   public function welcome(){
    //return view('welcome');
    var_dump($this->globali);
   }

   public function login(){
    return view('login',['oneten'=>[1,2,3,4],'day'=>6]);
   }
   public function form(){
    return view('form',['array'=>request()->all()]);
   }
}
// class newfor{
//     public $name;
//     function va()
//     {
//         echo $this->name = 'asad';

//     }
// }
