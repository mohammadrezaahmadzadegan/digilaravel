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
   //  var_dump($this->globali);


   // return ($request->get('a','not find'));

//    $result = $request->getRequestUri();
//    $result = '22' . $result;
//    $array = explode('/',$result);
//    echo $array[1];

// dd($request->route()->parameters('id'));
return view('index');
   }
   public function welcome(Request $request){
    //return view('welcome');
   //  var_dump($this->globali);
//    $final = $request->query();
//    var_dump($final);
//    foreach ($final as $key => $value) {
//     echo $key;
$path = '2';
$parameters = $request->allFiles();
foreach($parameters as $key => $value){

}

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
