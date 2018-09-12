<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
    public function project()

    {
    	//un nivel le pertenece a un proyecto
    	return $this->belongsTo('App\Project');
    }
}
