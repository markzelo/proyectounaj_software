<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\ProductImage;
use App\CartDetail;
use App\User;
use App\Cart;
use DB;

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

     //elegir el detalle que contiene el cartid del  id de car que tiene el user_id del usuario auth
         $cart=Cart::where('user_id',$user->id)->get();


         $my_cart_details = CartDetail::where('cart_id', 1)->get();

        //  $posts = Post::select('posts.*')
        //  ->join('categories', 'categories.id', '=', 'posts.category_id')
        //  ->groupBy('posts.id')
        //  ->where('categories.deleted_at', '=', null)
        //  ->orderBy('categories.name');
         
        //  if(request()->get('date')){
        //     $posts->where('posts.date', $date)
        // }

        // $posts = $posts->get();



        return view('products.index')->with(compact("my_cart_details"));
    }




}
