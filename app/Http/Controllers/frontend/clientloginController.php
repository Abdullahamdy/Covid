<?php

namespace App\Http\Controllers\frontend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class clientloginController extends Controller
{
    public function login(Request $request){

        $validate =  $request->validate([
            'email'=>'required',
            'password'=>'required|min:6'

        ]);

        if (auth('client')->attempt($validate)) {


           return redirect()->route('main');

        }else{



            return redirect()->back();
        }

    }
    public function logout () {

        auth('client')->logout();

        return redirect('/');
    }

    public function register(Request $request)
    {
        $record = new Client();

        $validation = $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|unique:clients',
            'password'=>'required|string',

        ]);

        if($validation){

            $record->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'is_active'=>1,
            ]);
            return redirect()->route('main');
        }

    }
}
