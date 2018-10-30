<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //solo usuarios administradores acceden opcion:auth,admin,etc
   public function __construct()
    {
        $this->middleware('admin');
    }
    
     public function index(){
    $products=Product::paginate(5);
    return view('admin.products.index')->with(compact('products'));
    }

    public function create(){
        return view('admin.products.create');
    }

    public function store(Request $request){
        $product =new Product();
        $product->name =$request->input('name');
        $product->description =$request->input('description');
       
        $product->long_description =$request->input('long_description');
        $product->price =$request->input('price');
        $product->save();

        //redirige a vista anterior

        return redirect('/admin/products');
    }

    public function edit($id){

        $product = Product::find($id);
        return view('admin.products.edit')->with(compact("product"));
    }
    
    public function update(Request $request, $id){
        

        $product = Product::find($id);
        $product->name =$request->input('name');
        $product->description =$request->input('description');
        $product->long_description =$request->input('long_description');
        $product->price =$request->input('price');
        $product->save();

        //redirige a vista anterior

        return redirect('/admin/products');
    }

     public function destroy($id){
        

        $product = Product::find($id);
       
        $product->delete();

        //redirige a vista anterior

        return back();
    }

    public function listas(){
        $products=Product::paginate(5);
        return view('listasproductos')->with(compact('products'));
    }
}
