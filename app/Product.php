<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()

    {
    	//una producto pertenece a una categoria
    	return $this->belongsTo(Product::class);
    }
    
     public function images()

    {
    	
    	return $this->hasMany(ProductImages::class);
    }
}
