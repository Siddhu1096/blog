<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class multiController extends Controller{
public function index(){
        return view('hello1');
    }
    public function index1(){
        return view('hello1');
    }
    public function product(Request $request)
    {
        $product=$request->number1*$request->number2;
        return view('product',['result'=>$product]);
    }
   
}
