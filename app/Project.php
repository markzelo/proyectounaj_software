<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    

    public static $rules = [
        'name' => 'required',
        // 'description' => '',
        'start' => 'date'
    ];

    public static $messages = [
        'name.required' => 'Debera  ingresar un nombre para el proyecto.',
        'start.date' => 'La fecha esta mal ingresado por el tipo de formato elegido.'
    ];

    //campos que se pueden asignar de forma masiva

    protected $fillable = [
        'name', 'description', 'start'
    ];

    // relationships
    public function categories()
    {
        //un proyecto tiene muchas 
        return $this->hasMany('App\Category');
    }

    public function levels()
    {
        return $this->hasMany('App\Level');
    }

//relacion muchos amuchos con usuarios
    public function users()
    {
        return $this->belongsToMany('App\User');
    }


    // accessors

    public function getFirstLevelIdAttribute()
    {
        //devuelve el id del nivel
        return $this->levels->first()->id;
    }
}
