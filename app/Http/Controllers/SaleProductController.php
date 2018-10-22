<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\ProductImage;

class SaleProductController extends Controller
{
    public function show($id){
     $product=Product::find($id);
     $images= $product->images;
     return view('products.show')->with(compact("product","images"));
     }

     public function index($id){
     $product=Product::find($id);
     $images= $product->images;
     return view('products.index')->with(compact("product","images"));
     }




}
