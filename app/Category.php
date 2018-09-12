<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;



//campos requeridos
    protected $fillable = ['name','project_id']; 


    public function project()

    {
    	//una catego pertenece a una 
    	return $this->belongsTo('App\Project');
    }
}
