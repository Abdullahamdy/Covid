<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


class WishListController extends Controller
{
    public function addwishlist(){
        // dd(request('productId'));
        if(!auth()->user()->wishListHas(request('productId'))){
            auth('client')->user()->wishList()->attach(request('productId'));
        }
      
    }
}
