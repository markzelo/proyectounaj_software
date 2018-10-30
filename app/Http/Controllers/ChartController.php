<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Product;
use DB;
use Auth;


use App\Http\Controllers\Controller;
use Charts ,App\User;
 
class ChartController extends Controller
{
    //solo usuarios administradores acceden opcion:auth,admin,etc
   public function __construct()
    {
        $this->middleware('admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function general()
    {
        // Total de incidentes en curso por tipo de usuarios
        $datos = DB::table('users')
                    ->select(DB::raw('
                            CASE WHEN role = 0 THEN "Administradores"
                            WHEN role = 1 THEN "Técnicos"
                            WHEN role = 2 THEN "Clientes" END as TipoCuenta'),
                    DB::raw('COUNT(*) as Total'))
                    ->join('incidents', 'users.id', '=', 'client_id')
                    ->groupBy('role')
                    ->get();

        // Total de usuarios por tipo de cuenta
        $datas = DB::table('users')
                    ->select(DB::raw('
                            CASE WHEN role = 0 THEN "Administradores"
                            WHEN role = 1 THEN "Técnicos"
                            WHEN role = 2 THEN "Clientes" END as TipoCuenta'),
                    DB::raw('COUNT(*) as Total'))
                    ->groupBy('role')
                    ->get();

        // Estado de los incidentes por tipo de usuarios
        $incidents = DB::table('users')
                    ->select(DB::raw('
                            CASE WHEN role = 0 THEN "Administradores"
                            WHEN role = 1 THEN "Técnicos"
                            WHEN role = 2 THEN "Clientes" END as TipoCuenta'),
                    DB::raw('SUM(incidents.active = 1) as TotalEnCurso'),
                    DB::raw('SUM(incidents.active = 0) as TotalFinalizada'))
                    ->join('incidents', 'users.id', '=', 'client_id')
                    ->groupBy('role')
                    ->get();
        
        return view ('/charts/general', compact('datos','datas','dates','incidents'));
        
    }


    public function line()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('/charts/line',['pastel'=>$pastel]);
        
    }

    public function incidents()
    {
        //usuario actual
        $idusuario = Auth::user()->id;

        // total de mis incidentes en curso/finalizadas por dia de la semana
        $datos = DB::table('users')
                    ->select(DB::raw('DAYNAME(incidents.created_at) as Dia'),
                    DB::raw('SUM(incidents.active = 1) as TotalEnCurso'),
                    DB::raw('SUM(incidents.active = 0) as TotalFinalizada'))
                    ->join('incidents', 'users.id', '=', 'client_id')
                    ->where('incidents.client_id', '=', $idusuario)
                    ->groupBy('Dia')
                    ->get();
        
        return view('/charts/incidents',compact('datos'));
        
    }

    public function area()
    {
        
        $pastel = Product::all();
                  // select('products.name','producto_venta.venta')
                  // ->join('products','products.id', '=', 'producto_venta.products_id')->get();
        return view('/charts/area',['pastel'=>$pastel]);
        
    }

    public function table()
    {
        
        // Listado de usuarios clientes

       $datos = DB::table('users')
                    ->select(DB::raw('
                            CASE WHEN role = 0 THEN "Administrador"
                            WHEN role = 1 THEN "Técnico"
                            WHEN role = 2 THEN "Cliente" END as TipoCuenta'),
                            'users.name as Usuario',
                            'projects.name as Proyecto',
                            'projects.description as Descripcion')
                    ->leftjoin('projects', 'selected_project_id', '=', 'projects.id')
                    ->whereBetween('role', [0, 2])
                    ->groupBy('role')
                    ->groupBy('users.name')
                    ->groupBy('projects.name')
                    ->groupBy('projects.description')
                    ->get();
        
        return view ('/charts/table', compact('datos'));
        
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