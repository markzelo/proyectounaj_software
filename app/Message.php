<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //relacion
    public function user()
    {
    	//1 msj le pertenece a un usuario
    	return $this->belongsTo('App\User');
    }
}
