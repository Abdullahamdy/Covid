<?php

use App\Http\Controllers\ApiController\AuthController;
use App\Http\Controllers\ApiController\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix'=>'v1','namespace'=>'ApiController'],function(){
    Route::post('login', [AuthController::class,'login']);
    Route::group(['middleware' =>'auth:api'],function(){
        Route::post('createProduct',[ProductController::class,'createproduct']);
        Route::post('editProduct',[ProductController::class,'editproduct']);
        Route::post('deleteProduct',[ProductController::class,'deleteproduct']);
        Route::post('addfavourite',[ProductController::class,'addFavourite']);
        Route::get('userProductFavourite',[ProductController::class,'userProductFavourite']);
        Route::post('addTobasket',[ProductController::class,'addTobasket']);
        Route::post('deleteCart',[ProductController::class,'deleteCart']);
        
        
    

    });
});


