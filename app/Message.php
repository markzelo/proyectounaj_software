<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //relacion
    public function user()
    {
    	//muchos msj le pertenece a un usuario
    	return $this->belongsTo('App\User');
    }
}
