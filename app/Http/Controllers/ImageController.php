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
        //uniqued secuencia de numeros hora del sistema en nuevo nombre de imagen
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

    public function destroy(Request $request, $id){
        //image_id de input
        $productImage =productImage::find($request->image_id);
//pone true a deleted si la imagen es de una http
        if(substr($productImage->image,0, 4)==="http"){
            $deleted=true;
        }else{
        //si la imagen esta en local
        $fullPath= public_path() ."/images/products/" .$productImage->image;
        $deleted=File::delete($fullPath);
        }

        //si todo esta correcto eleiminar  tambien de la base de datos
        //si deleted vale true
        if($deleted){
            $productImage->delete();
        }
        return back();

    }
}