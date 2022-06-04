<?php

namespace App\Http\Controllers\ApiController;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createproduct(Request $request){
        $rule = [
            'name'=>'required',
            'cat_id'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required',

        ];
        $data = Validator()->make($request->all(),$rule);
        if($data->fails()){
            return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
        }else{
           $product =  Product::create($request->all());
            return response()->json(['status'=>1,'message'=>'success','data'=>$product]);

        }

    }

    public function editproduct(Request $request){
        $rule = [
            'name'=>'required',
            'cat_id'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required',

        ];
        $data = Validator()->make($request->all(),$rule);
        if($data->fails()){
            return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
        }else{
           
            $product = Product::find($request->id);
            if($product){
                $product->update($request->all());
                return response()->json(['status'=>1,'message'=>'data updated successfully','data'=>$product]);

            }else{
                return response()->json(['status'=>0,'message'=>'the id is not found in product']);

            }
        

        }

    }
    public function deleteproduct(Request $request){
        $rule = [
          'id'=>'required',
        ];
        $data = Validator()->make($request->all(),$rule);
        if($data->fails()){
            return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
        }else{
           $product =  Product::find($request->id);
           $product->delete();
           return response()->json(['status'=>1,'message'=>'data deleted successfully']);
        } 

    }

    public function addFavourite(Request $request){
        if(!auth()->user()->wishListHas($request->productId)){
            auth()->user()->wishList()->attach(request('productId'));
            $product=Product::find($request->productId);
            $user = Auth::user()->name;
            
            return response()->json(['status'=>1,'message'=>'product added succssfully to  favourite list','data'=>[
                'productName'=>$product->name,
                'clientName'=>$user,
            ]]);
        }else{
            return response()->json(['status'=>0,'message'=>'The product has already been added']);

        }

    }

    public function userProductFavourite(){
      $productFavourite =   DB::table('wish_lists')->where('client_id',Auth::id())->get();
      if($productFavourite){
        return response()->json(['status'=>1,'message'=>'data success','data'=>$productFavourite]);
      }else{
        return response()->json(['status'=>0,'message'=>'user not have any product in favourite']);

      }
    }
    public function addTobasket(Request $request){
        $rule = [
            'prod_id'=>'required',
          ];
          $data = Validator()->make($request->all(),$rule);
          if($data->fails()){
              return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
          }else{
              $cart = Cart::where('product_id',$request->prod_id)->where('user_id',Auth::id())->first();
              if($cart){
                return response()->json(['status'=>0,'message'=>'failed','data'=>'this is product '.$cart->products->name.' has been added to cart']);
              }else{
                $cart =   Cart::create([
                    'product_id'=>$request->prod_id,
                    'user_id'=>Auth::id(),
                ]);
                return response()->json(['status'=>1,'message'=>'data added successfully','data'=>$cart]);
            }         
        }
      
    }

    public function deleteCart(Request $request){
        $rule = [
            'prod_id'=>'required',
          ];
          $data = Validator()->make($request->all(),$rule);
          if($data->fails()){
              return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
          }else{
              $cart = Cart::where('product_id',$request->prod_id)->where('user_id',Auth::id())->first();
            if($cart){
                $cart->delete();
            return response()->json(['status'=>1,'message'=>'success','data'=>'this is item '.$cart->products->name.' deleted successfully']);
            
        }else{
            return response()->json(['status'=>0,'message'=>'failed','this item not found in the collection']);
      }
    }
  }
}
