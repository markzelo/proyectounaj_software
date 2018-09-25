<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\Incident;
use App\User;
use App\ProjectUser;

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
   


   //armar las listas de los disponibles para recorrerlas y hacer consultas mis incidensia ,pendientes y sin asignar
   public function index()
    {
        $user = auth()->user();
        $selected_project_id = $user->selected_project_id;
      

        if ($selected_project_id) {
            //si es usuario es tecnico

            if ($user->is_support) {
                //de la tabla de incidencias vemos las incidencias del proyecto id de select project que se signaron al usario que inicio sesion
                $my_incidents = Incident::where('project_id', $selected_project_id)->where('support_id', $user->id)->get();

                $projectUser = ProjectUser::where('project_id', $selected_project_id)->where('user_id', $user->id)->first();
                //obj con 3 atributos

                //consultar incidencias sin asignar

                if ($projectUser) {
                    $pending_incidents = Incident::where('support_id', null)->where('level_id', $projectUser->level_id)->get();
                } else {
                    $pending_incidents = collect(); // si no hay projecto asociado
                }
            }

            //consulatar incidencis reportadas por mi 

            $incidents_by_me = Incident::where('client_id', $user->id)
                                        ->where('project_id', $selected_project_id)->get();
            } //si no 
            else {
                $my_incidents = [];
                $pending_incidents = [];
                $incidents_by_me = [];
            }

           

        return view('home')->with(compact('my_incidents', 'pending_incidents', 'incidents_by_me'));
       
    }


    public function selectProject($id)
    {
        // Validar que el usuario esté asociado con el proyecto
        $user = auth()->user();
        $user->selected_project_id = $id;
        $user->save();

        return back();
    }

<<<<<<< HEAD



=======
    public function getReport()
    {
        return view('report');
    }
>>>>>>> rama_agustin
}
