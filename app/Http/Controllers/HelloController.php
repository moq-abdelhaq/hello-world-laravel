<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function indexWithParam(Request $request,$name){
        $params = ['name'=>$name];
        return view('hello-with-param')-> with($params);
    }    

    public function index(Request $request){
        return view('hello');
    }
    
}
