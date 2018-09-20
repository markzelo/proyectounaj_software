<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
	use SoftDeletes;

	//reglas de validacion
	public static $rules = [
		'name' => 'required',
		'start' => 'date'
	];

	// msj de error personalizado
    public static $messages = [
    	'name.required' => 'Es necesario ingresar el nombre del proyecto.',
        'start.date' => 'No se reconoce el formato de la fecha ingresada.'
    ];

    protected $fillable = [
        'name', 'description', 'start'
    ];

    public function categories(){
    	return $this->hasMany('App\Category');
    }

    public function levels(){
    	return $this->hasMany('App\Level');
    }

}
