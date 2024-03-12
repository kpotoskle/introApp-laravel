<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacineController extends Controller
{
    public function index(){
        $racine=0;
        return view('racine')->with('racine',$racine);
    }
    public function racineSimple(Request $request){
        $racine = sqrt($request->a);
        return view('racine')->with('racine',$racine);
    }
}
