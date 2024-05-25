<?php
echo 'this is web.php page in routes';
echo '<br>';

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('homepage');

Route::get('/welcome','HomeController@welcome')->name('welcome')->middleware('CheckUsers');

Route::get('/login',['uses'=>'HomeController@login','as'=>'login','middleware'=>['newmy']]);

Route::get('/signup','HomeController@login')->middleware(['newmy']);


Route::get('/my/{id?}','mycontroller');

Route::view('/best', function(){
    echo 'this is view';
});

Route::post('/form','HomeController@form');

// Route::resource('/user',['uses'=>'UserController','as'=>'login','middleware'=>['CheckUsers']]);

//Route::resource('/user','UserController')->except(['index','show']);
