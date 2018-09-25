<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()

    {
    	//una producto pertenece a una categoria
        //a revision
        //
    	return $this->belongsTo(Category::class);
    }
    
     public function images()

    {
    	//un producto tiene muchas imagenes
    	return $this->hasMany(ProductImage::class);
    }
}
