<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSearch extends Controller
{
    public function search(Request $request) {
        if($request->has('q')){
            $q = $request->q;
            $result  = Product::where('name','like','%'.$q.'%')->get();
            foreach($result as $photo){
               $img = $photo->image[0]->filename;

            }
            //  $img = $result->image->filename;
            return response()->json(['data'=>$result]);
        }

       }
       public function productsdetails($id){
           $productsnew = Product::where('id',$id)->get();
           return view('frontend.product-details',compact('productsnew'));


       }
}
// {{asset('Attachments/products/${img}')}}
