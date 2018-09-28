<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Product;

class TestController extends Controller
{
    public function index(){
       	$products=Product::paginate(5);
    return view('product.productos.index')->with(compact('products'));
    }
    
}
