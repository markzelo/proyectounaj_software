<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // public function solutions(){
    // 	$products=Product::all();
    // 	return view('product.productos')->with(compact('products'));
    // }

    public function solutions(){
    	$products=Product::paginate(5);
    	return view('product.productos.solutions')->with(compact('products'));
    }
    public function create(){
    	return view('product.productos.create');
    }
    public function store(){
    	return view();
    }



}
