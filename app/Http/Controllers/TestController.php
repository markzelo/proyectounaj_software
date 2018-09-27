<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Product;

class TestController extends Controller
{
    public function index(){
       $products=Product::all();
       return view('products.productos')->with(compact('products'));
     }
}
