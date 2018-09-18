<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;
use App\Project;
use App\ProjectUser;


class IncidentController extends Controller
{
   
//solo usuarios aitenticados crean inicdencias
   public function __construct()
    {
        $this->middleware('auth');
    }

//incidencia especifica
    public function show($id)
    {
        //captura de incidencias
        $incident = Incident::findOrFail($id);
       //activacion de msj
        $messages = $incident->messages;

        return view('incidents.show')->with(compact('incident','messages'));
    }

   


     public function create() 
    {
        $categories = Category::where('project_id', 1)->get();
        return view('incidents.create')->with(compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, Incident::$rules, Incident::$messages);

        $incident = new Incident();
        $incident->category_id = $request->input('category_id') ?: null;
        $incident->severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');

        $user = auth()->user();

        $incident->client_id = $user->id;
        $incident->project_id = $user->selected_project_id; //proyecto seleccionado
        $incident->level_id = Project::find($user->selected_project_id)->first_level_id; // en nivel esta seleccionado

        $incident->save();

        return back();
    }


   

    public function edit($id)
    {
        $incident = Incident::findOrFail($id);
        $categories = $incident->project->categories;
        return view('incidents.edit')->with(compact('incident', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Incident::$rules, Incident::$messages);
        //no es una nueva instancia
        $incident = Incident::findOrFail($id);

        $incident->category_id = $request->input('category_id') ?: null;
        $incident->severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');

        $incident->save();
        return redirect("/ver/$id");        
    }





    
//objetos de incidencia
    //tomar incidencia
    public function take($id)
    {
         $user = auth()->user();

        if (! $user->is_support)
            return back();
        

        $incident = Incident::findOrFail($id);
        

        // relacion entre usuario y project:consulta buscar un id de proy igual al id del project que tiene la incidenia
        $project_user = ProjectUser::where('project_id', $incident->project_id)
        //donde el id de usario es igual al usuario que acaba de iniciar sesion
                                        ->where('user_id', $user->id)->first();


        //si no existe no tiene permisos
         if (! $project_user)
            return back();

        // tiene relacion y consulat de nivel adecuado para el project usuario e incidencia en el mismo nivel
        if ($project_user->level_id != $incident->level_id)
            return back();
        
        $incident->support_id = $user->id;
        $incident->save();

        return back();
    }
    public function solve($id)
    {
         $incident = Incident::findOrFail($id);

        // solo si es el autor del reporte
        if ($incident->client_id != auth()->user()->id)
            return back();
           
        $incident->active = 0; // false
        $incident->save();

        return back();
       
    }
    public function open($id)
    {
        $incident = Incident::findOrFail($id);

        if ($incident->client_id != auth()->user()->id)
            return back();
           
        $incident->active = 1; // true
        $incident->save();

        return back();
      
    }

//derivacion al siguiente nivel
     public function nextLevel($id)
    {
        $incident = Incident::findOrFail($id);
        //nivel de nuestra incidencia
        $level_id = $incident->level_id;


//obtener proyecto y niveles de las incidencias
        $project = $incident->project;
        $levels = $project->levels;

        //funcion para pasar a la coleccion de niveles disponibles
        $next_level_id = $this->getNextLevelId($level_id, $levels);
//corroborar si hay un siguiente nivel
        if ($next_level_id) {
            $incident->level_id = $next_level_id;
            //cambia al siguinte nivel sin soporte asignado
            $incident->support_id = null;
            $incident->save();
            return back();
        }

        return back()->with('notification', 'No es posible derivar porque no hay un siguiente nivel.');
    }
    //busqueda de nivel siguiente en la coleecion
   public function getNextLevelId($level_id, $levels)
    {
        if (sizeof($levels) <= 1)
            return null;
//busqueda en el arreglo menos en el ultimo
        $position = -1;
        for ($i=0; $i<sizeof($levels)-1; $i++) { // -1
            if ($levels[$i]->id == $level_id) {
                $position = $i;
                break;
            }
        }

        if ($position == -1)
            return null;

        // if ($position == sizeof($levels)-1)
        //     return null;

        return $levels[$position+1]->id;//este es el next level
    } 

















}
