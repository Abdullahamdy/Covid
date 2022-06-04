<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartlist(){
        $pro_id = request('productId');
        $user_id = Auth::id();
        $cartCheck =   Cart::where('user_id',$user_id)
        ->where('product_id',$pro_id)->first();
        if(!$cartCheck){
          $cartAdd  =  Cart::create([
                'user_id'=>$user_id,
                'product_id'=>$pro_id,
                'qutit'=>1,
            ]);

            $data = Product::with('image')->find($pro_id);
            return response()->json(['data'=>$data,'cart'=>$cartAdd]);


        }
        else
        {
            return response()->json(['error'=>'cart Added']);
        }


    }
    public function editpage(){
        $carts = Cart::where('user_id',Auth::id())->get();
        return view('frontend.cart',compact('carts'));

    }

    public function deleteItem(){

       $id = request('cart_id');
       Cart::where('user_id',Auth::guard('client')->id())->where('product_id',$id)->delete();
      return response()->json(['success'=>'data Deleted Successfully']);
    }

    public function updatequntity(){

       $cart =  Cart::where('product_id',request('_id'))->where('user_id',Auth::guard('client')->id())->first();
       $price = $cart->products->price;
       $qut = $cart->qutit;
       $qunpro = $cart->products->quantity;

       if(request('qunti') > $qunpro){
           
        return response()->json(['status'=>'error','msg'=>'this is Quntity not avaliable']);

       }


        $cart->update([
            'qutit'=>request('qunti'),
        ]);
       
        return response()->json(['status'=>'success','msg'=>'dataUpdatedSuccessfully','data'=>$cart]);
    }
}
