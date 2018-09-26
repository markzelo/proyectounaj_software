<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;


class ImageController extends Controller
{
    public function index($id){
    	$product= Product::find($id);
    	$images= $product->images;
    	return view("admin.products.images.index")->with(compact("product","images"));
    }

    public function store(Request $request ,$id){

    	//guradar iamgenes del proyecto
    	$file=$request->file("photo");
    	$path=public_path() ."/images/products";
        //nombre del archivo original del usuario
        //uniqued secuencia denumeros en bae a hora del sistema
    	$fileName=uniqid() .$file->getClientOriginalName();
    	$file->move($path, $fileName);
    	//introdurcie  la table
        $productImage = new ProductImage();
        $productImage->image= $fileName;
        $productImage->product_id=$id;
        $productImage->save();

        return back();

    }
    // public function destroy($id){
    //     $productImage= ProductImage::find($id);
      
    // }

}
