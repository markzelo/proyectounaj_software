 public function index()
    {
        //consultas para mostarar en el panel dash

        //incidencias asignadas 
        

// usuario con inicio de sesion
        $user =auth()->user();

        $selected_project_id= $user->selected_project_id;

        //si es tecnico
        if($user->is_support){

        //mis incidencias
        $my_incidents=Incident::where('¨project_id', $selected_project_id)
                            //reportes a su id
                            ->where('support_id', $user->id)->get();

       $projectUser = ProjectUser::where('project_id', $selected_project_id)
                                           ->where('user_id', $user->id)->first();

        //incidencias sin asignar en  en mi nivel
        $pending_incidents = Incident::where('support_id', null)
                                        ->where('level_id', $projectUser->level_id)->get();

        }



//incidencias reportadas  por mi  --------------------------------------------------------------------------

        $incidents_by_me = Incident::where('client_id', $user->id)
                                        ->where('project_id', $selected_project_id)->get();



        return view('home')->with(compact('my_incidents','pending_incidents','incidents_by_me'));
    }


    /-----------------------------------------------------------------------------------------------
   
// podrías tener
app/frontent
  - controllers
  - models
  - views
app/backend
  - controllers
  - models
  - views

Así quedaría perfectamente organizado y sin lugar a errores. Los modelos y los controladores, utilizando los estándares PSR-0 o PSR-4 no tendrás problema, simplemente pon el namespace correctamente. 
Para las views, puedes utilizar namespaces y establecer donde se encuentran. Podrías crearte como hago yo, un service provider que registra lo siguiente:

<?php namespace Devio\Providers;

use Illuminate\Support\ServiceProvider;

class ViewNamespacingServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Frontend
        $this->app['view']->addNamespace('Frontend',      app_path('frontend/views'));
        // Backend
        $this->app['view']->addNamespace('Backend',      app_path('backend/views'));
       
    }

}
Y añádelo a tu lista de service providers en el archivo de configuración app.php. Podrás acceder a las vistas utilizando sus namespaces:

View::make('Frontend::vista');

/------------------------------------------------------------------------------------------------------------------------------
incidencias del proyecto 1
incident::where("project_id",1)->

where("support_id",auth ()->user()->id)->get());
compara suppor id de incidencias con mi prpio id



where("support_id",null->get());
comparar con incidencias vacias 
incidencias en todos los niveles

en un nivel que se corresponde
->where("level_id", )->get();

objeto de 3 atributos id del nivel que no s encontramos
$projectUser=projectUser::where("project_id",1)
->where("user_id",auth()->user()->id)->first();//es donde estamos

$projectuser->level_id;


tinker
$incidents=App\Incident::all();
count
first


$product=Product::where("category_id",1)->count();