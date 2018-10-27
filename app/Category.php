<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;



    //campos requeridos para rellenar
    protected $fillable = ['name','project_id']; 


    public function project()

    {
    	//mas de una  categoria pertenece a unproyecto
    	return $this->belongsTo('App\Project');
    }

    public function product()

    {
    	//una categoria pertenece a muchos producto
    	return $this->hasMany(Product::class);
    }
}
