<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Product;
use DB;


use App\Http\Controllers\Controller;
use Charts ,App\User;
 
class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index_pie()
    {
        
        $datas = DB::table('users')
                        ->select(DB::raw('count(*) as Usuarios, role as Rol'))
                        ->groupBy('Rol')
                        ->get();

        return view('/charts/pie', compact('datas'));
        
    }

    public function index_line()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('/charts/line',['pastel'=>$pastel]);
        
    }

    public function index_bar()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('/charts/bar',['pastel'=>$pastel]);
        
    }

    public function index_area()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('/charts/area',['pastel'=>$pastel]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}