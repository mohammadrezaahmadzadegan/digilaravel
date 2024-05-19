<?php

use App\Models\Article;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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

Route::get('/', 'App\Http\Controllers\homeController@index');
Route::post('/form-submit', 'App\Http\Controllers\homeController@formsubmit');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/shop/{id}', function ($id) {
    return $id;
});
Route::get('/foo', 'App\Http\Controllers\homeController@foo');

Route::get('shoping',function(){
return view('foo');
});

Route::view('digi', 'foo');
