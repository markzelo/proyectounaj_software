<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ImageController extends Controller
{
    public function index($id){
    	$product= Product::find($id);
    	$images= $product->images;
    	return view("products.images.index")->with(compact("product","images"));
    }
    public function store(Request $request){

    	//guradar iamgenes del proyecto
    	$file=$request->file("photo");
    	$path=public_path() ."/images/products";
    	$filename=uniquid() .$file->getClienteOriginalName();
    	$file->move($path. $filename);

    	//introdurcie  la table


    }
}
