<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\ArticaleController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\clientloginController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\frontend\PatientController;
use App\Http\Controllers\frontend\ProductSearch;
use App\Http\Controllers\frontend\WishListController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
// Route::get('/',[HomeController::class,'index'])->name('main');
Route::group(['middleware'=>'auth:client'],function(){
    Route::get('/',[HomeController::class,'index'])->name('main');
    Route::post('/logout', [clientloginController::class,'logout'])->name('logout');

Route::post('wishlist',[WishListController::class,'addwishlist'])->name('stor.wishlist');
Route::post('shoppingcart',[CartController::class,'cartlist'])->name('stor.shoppingcart');

Route::get('/productsearch', [ProductSearch::class,'search'])->name('productsearch');
Route::get('edit-cart',[CartController::class,'editpage'])->name('edit-cart');
Route::post('delete.shoppingcart',[CartController::class,'deleteItem'])->name('delete.shoppingcart');
// Route::get('front.main',[])->name('front.main');
Route::get('articale-page',[ArticaleController::class,'index'])->name('articale-page');
Route::get('contact-us',[ContactUsController::class,'index'])->name('webcontactus');
Route::post('storecontact-us',[ContactUsController::class,'store'])->name('storecontact-us');
Route::post('patient-create',[PatientController::class,'store'])->name('patient-create');

});

Route::view('/home','frontend.login')->name('front.home');
Route::post('/client-register',[clientloginController::class,'register'])->name('register');
Route::post('/clientLogin', [clientloginController::class,'login'])->name('clientLogin');
Route::post('update.quntity',[CartController::class,'updatequntity'])->name('update.quntity');
Route::get('products-details/{id}',[ProductSearch::class,'productsdetails'])->name('products-details');
