<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
    public function index(){
        return view('hello');
    }
    public function index1(){
        return view('hello');
    }
    public function add(Request $request)
    {
        $sum=$request->number1+$request->number2;
        return view('sum',['result'=>$sum]);
    }
   
}
