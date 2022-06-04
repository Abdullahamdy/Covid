<?php

namespace App\Http\Controllers\ApiController;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rule = [
            'email'=>'required',
            'password'=>'required',

        ];
        $data = Validator()->make($request->all(),$rule);
        if($data->fails()){
            return response()->json(['status'=>0,'message'=>'failed',$data->errors()->first()]);
        }
        $client = Client::where('email',$request->email)->first();

        if($client){
            if(Hash::check($request->password,$client->password)){
                $Token = $client->createToken('tokenName')->accessToken;
                return response()->json(['status'=>1,'message'=>'you are Login',['Token'=>$Token,'client'=>$client]]);

            }else{
                return response()->json(['status'=>0,'message'=>'data error']);

            }


        }


    }
}
