<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //campo oculto
    protected $hidden = [
        'password', 'remember_token',
    ];

    //selector de tipo deusuario
    //creacion de accesor  funciones get 

    public function getIsAdminAttribute()
    {
        //acceso al objeto y usa su atributo
        return $this->role == 0;
    }
    
    public function getIsSupportAttribute()
    {
        return $this->role == 1;
    }
    
    public function getIsClientAttribute()
    {
        return $this->role == 2;   
    }
    
    //relacion entre usuarios y proyectos muchos a muchos
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    public function canTake(Incident $incident)
    {
        return ProjectUser::where('user_id', $this->id)
        //donde el nivel de id del usuario coincide con el nivel de incidencia
                        ->where('level_id', $incident->level_id)
                        ->first();
        
    }



    //accesos a proyectos para tecnicos
     public function getListOfProjectsAttribute()
    {
        if ($this->role == 1)
            return $this->projects;
        //caso contrario
        return Project::all();
    }



    //funcion scope para listar resultados de busqueda

    public function scopeBusqueda($query,$select_project_id,$dato="")
     {

            if($role==0){ 
            $resultado= $query->where('name','like','%'.$dato.'%')
                               ->orWhere('email','like', '%'.$dato.'%');
            }
            else{
               
              $resultado= $query->where("role","=",$role)
                                  ->Where(function($q) use ($role,$dato)  {
                                    $q->where('name','like','%'.$dato.'%')
                                      ->orWhere('email','like', '%'.$dato.'%');       
                                   });

             }                     
        
        return  $resultado;
     }
     
}
