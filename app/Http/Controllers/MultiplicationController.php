<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index(){
        $mul = 0 ;
        return view("multiplication")-> with('mul',$mul);
    }
    public function multiplicationSimple(Request $request){
        $mul=$request->a * $request->b;
        return view("multiplication")->with('mul',$mul);
    }
}
