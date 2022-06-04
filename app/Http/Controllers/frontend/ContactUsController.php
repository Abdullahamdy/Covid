<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('frontend.contact-us');

    }
    public function store(Request $request){
        $validation =  $request->validate([
               "username" => "required",
               "age" => "required|int",
               "address" => "required|string|max:250",
               "message" => "required|string|max:1500",
               "email" => "required|unique:clients,email,".auth()->id(),
           ]);
           if($validation){

               ContactUs::create($request->except('_token'));
               return redirect()->back()->with('message','data added Successfully');
           }



       }
}
