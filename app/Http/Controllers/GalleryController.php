<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class GalleryController extends Controller
{
    public function index(){
    $products=Product::paginate(5);
    return view('listasproductos')->with(compact('products'));
    }
    
}
