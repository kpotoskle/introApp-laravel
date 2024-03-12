<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionController extends Controller
{
    public function index(){
        $somme = 0 ;
        return view("addition")-> with('somme',$somme);
    }

    public function additionSimple(Request $request){
        $somme = $request->a+ $request->b;
        return view("addition")-> with('somme',$somme);
    }
}
