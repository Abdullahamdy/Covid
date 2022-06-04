<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Articale;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    public function index(){
        $articales = Articale::paginate(5);
        return view('frontend.articales',compact('articales'));
    }

}
