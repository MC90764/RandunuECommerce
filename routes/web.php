<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
    //return view('welcome');
//});
//Route::get('/',"App\Http\Controllers\UserController@index" );

Route::get('/',"App\Http\Controllers\CustomerController@index" );
//Route::get('/users', 'App\Http\Controllers\UserController@index');
//Route::post('/registerform',[UserController::user, 'index']);

Route::get('/register',"App\Http\Controllers\CustomerController@create" );

Route::post('/store',"App\Http\Controllers\CustomerController@store" );

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//Route::getRoutes('/admin',"App\Http\Controllers\UserController@index");

Route::get('category', [FrontEndController::class,'category']);
Route::get('view-category/{slug}', [FrontEndController::class,'viewcategory']);

Route::get('/grocery', "App\Http\Controllers\ProductController@index");
