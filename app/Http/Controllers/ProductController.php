<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Excel;
use Datatables;

class ProductController extends Controller
{
    
    // public function index(){
    // 	$products=Product::paginate(5);
    // 	return view('admin.products.index')->with(compact('products'));
    // }
    public function create(){
    	return view('products.productos.create');
    }
    public function store(){
    	return view();
    }
    

    public function index(){
        $products=Product::all();
       return view('products.productos')->with(compact('products'));
     }



//CHARTS
   


}
