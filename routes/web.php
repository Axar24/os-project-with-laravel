<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use App\Models\Admin;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
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

//-----------------------------show-------------------------------//
Route::get('/', [PostsController::class,'index']);
Route::get('/show/{product}', [PostsController::class,'show']);


//----------------------------register--------------------------//
Route::get('/register',[AuthController::class,"register"])->middleware('guest');
Route::post('/register',[AuthController::class,"store"])->middleware('guest');


//------------------------------login/out-----------------------//
Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'relogin'])->middleware('guest');
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

//-----------------------------Adminpannel--------------------//
Route::get('/create',[AuthController::class,"create"]);



//-----------------------------ownerpannel-------------------//
Route::get('/owner',[AuthController::class,'owner']);


//----------------------------application--------------------//
Route::get('/application',[ApplicationController::class,"application"]);
Route::post('/application',[ApplicationController::class, "receive"]);


//-----------------------------ordering-----------------------//
Route::get('/buy',function(){
    return view('order');
});