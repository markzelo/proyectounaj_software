<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;


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
    	$moved= $file->move($path, $fileName);
    	//se regsitre cunado la imagen se gurad correctamente como archivo
        if($moved){
            $productImage = new ProductImage();
            $productImage->image= $fileName;
            $productImage->product_id=$id;
            $productImage->save();

        }
        return back();

    }

    public function destroy(Request $request ,$id){

        $productImage =productImage::find($request->input("image_id"));
        //si la imagen es una url completa ya essta eliminada
        if(substr($productImage->image, 0, 4) === "http"){
            $deleted=true;

        }else{
            $fullPath= public_path() ."/images/products/" .$productImage->images;
            $deleted=File::delete($fullPath);
        }
        //si todo esta correcto eleiminar  tambien de la base de datos
        if($deleted){
            $productImage->delete();
        }
        return back();

    }
}