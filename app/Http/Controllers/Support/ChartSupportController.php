<?php
 
namespace App\Http\Controllers\Support;
 
use Illuminate\Http\Request;

use App\Product;
use DB;
use Auth;


use App\Http\Controllers\Controller;
use Charts ,App\User;
 
class ChartSupportController extends Controller
{
    //solo usuarios administradores acceden opcion:auth,admin,etc
   public function __construct()
    {
        $this->middleware('support');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function stats()
    {
        //usuario actual
        $idusuario = Auth::user()->id;

        // Total de incidentes reportadas en curso o finalizada por dia
        $datos = DB::table('users')
                    ->select(DB::raw('DAYNAME(incidents.created_at) as Dia'),
                    DB::raw('SUM(incidents.active = 1) as TotalEnCurso'),
                    DB::raw('SUM(incidents.active = 0) as TotalFinalizada'))
                    ->join('incidents', 'users.id', '=', 'support_id')
                    ->where('incidents.support_id', '=', $idusuario)
                    ->groupBy('Dia')
                    ->get();
        
        return view('support/charts/stats', compact('datos'));
        
    }

    public function incidents()
    {
        //usuario actual
        $idusuario = Auth::user()->id;

        // Estado de los incidentes reortadas a mi
        $datos = DB::table('users')
                    ->select(DB::raw('
                            CASE WHEN active = 0 THEN "Finalizada"
                            WHEN active = 1 THEN "En curso" END as Estado'),
                            DB::raw('count(*) as Total'))
                    ->join('incidents', 'users.id', '=', 'support_id')
                    ->where('incidents.support_id', '=', $idusuario)
                    ->groupBy('incidents.active')
                    ->get();
        
        return view ('Support/charts/incidents', compact('datos'));
        
    }

    public function area()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('support/charts/area',['pastel'=>$pastel]);
        
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