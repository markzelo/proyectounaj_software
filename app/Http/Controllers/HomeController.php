<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     esta funcion te permite reedirigir entre un usuario que iniciaron session
     middle
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function getReport()
    {
        //inyectar la variable categories para que se accesible para el foreach de report.blade.php 
        $categories = category::where('project_id', 1)->get();
        return view('report')->with(compact('categories'));
    }

    public function postReport(Request $request)
    {
        //reglas de validacion
        $rules = [
            'category_id' => 'sometimes|exists:categories,id',
            'severity' => 'required|in:M,N,A',
            'title' => 'required|min:5',
            'description' => 'required|min:15'
        ];

        // msj de error personalizado
        $messages = [
            'title.required' => 'Es necesario el ingreso de un titulo para la incidencia.',
            'title.min' => 'El titulo debe superar los 5 caracteres.',
            'description.required' => 'Es necesario el ingreso de una descripcion para la incidencia.',
            'description.min' => 'La descripcion debe superar los 15 caracteres.'
        ];

        // si no se cumple lo anterior no se prosigue con la ejecusion
        $this->validate($request, $rules, $messages);

        $incident = new Incident();
        $incident->category_id = $request->input ('category_id') ?: null;
        $incident->severity = $request->input ('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
        $incident->client_id = auth()->user()->id;
        $incident->save();

        return back();
    }
}
