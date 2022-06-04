<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Auth\LoginController;


Route::group(['middleware' => ['guest:web']], function () {
    Route::get('/login', [AuthController::class,'viewLogin'])->name('admin.login');

    Route::post('/login', [AuthController::class,'login']);
});
    Route::group(['middleware' => ['auth:web']], function () {
        Route::get('admin-home',function(){
            return view('layout.master');
        })->name('admin-home');
    Route::get('/logout',[LoginController::class,'logout']);
    // Route::post('/admin-login',[LoginController::class,'adminlogin'])->name('admin-login');
    Route::get('Roles',\App\Http\Livewire\Roles\Roles::class)->name('Roles');
    Route::get('users',\App\Http\Livewire\Users\Users::class)->name('users');
    Route::get('categories',\App\Http\Livewire\Categories\Category::class)->name('categories');
    Route::get('products',\App\Http\Livewire\Products\Product::class)->name('products');
    Route::get('doctor',\App\Http\Livewire\Doctors\Doctor::class)->name('doctor');
    Route::get('nurses',\App\Http\Livewire\Nurses\Nurse::class)->name('nurses');
    Route::get('floors',\App\Http\Livewire\Floors\Floor::class)->name('floors');
    Route::get('rooms',\App\Http\Livewire\Rooms\Room::class)->name('rooms');
    Route::get('patient',\App\Http\Livewire\Patients\Patient::class)->name('patient');
    Route::get('articale',\App\Http\Livewire\Articale\Articale::class)->name('articale');
    Route::get('contact-us',\App\Http\Livewire\ContactUs\ContactUs::class)->name('contact-us');
    Route::get('serveces',\App\Http\Livewire\Serveces\Serveces::class)->name('serveces');
    Route::get('feeling-contagiouses',\App\Http\Livewire\FeelingContagious\FeelingContagious::class)->name('feeling-contagiouses');
    Route::get('infected-peoples',\App\Http\Livewire\InfectedPeoples\InfectedPeoples::class)->name('infected-peoples');
    Route::get('rooms',\App\Http\Livewire\Rooms\Room::class)->name('rooms');


});
