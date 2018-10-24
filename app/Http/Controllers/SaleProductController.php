<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\ProductImage;
use App\CartDetail;
use App\User;
use App\Cart;

class SaleProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }



    public function show($id){
     $product=Product::find($id);
     $images= $product->images;
     return view('products.show')->with(compact("product","images"));
     }

     public function index(){

     $user = auth()->user();
    

     // $my_cart_details=CartDetail::all();
      //user_id =2     de tabla cart
      $my_cart_details = CartDetail::where('cart_id',$user->id)->get();
     




     return view('products.index')->with(compact("my_cart_details"));
     }




}
