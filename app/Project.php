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
        'name.required' => 'Es necesario ingresar un nombre para el proyecto.',
        'start.date' => 'La fecha no tiene un formato adecuado.'
    ];

    //campos que se pueden asignar de forma masiva
    protected $fillable = [
        'name', 'description', 'start'
    ];

    // relationships
    public function categories()
    {
        //un proyecto tiene muchas categorias
        return $this->hasMany('App\Category');
    }

    public function levels()
    {
        return $this->hasMany('App\Level');
    }

    
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
