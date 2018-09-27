<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	//una producto pertenece a una categoria
        //a revision
    	return $this->belongsTo(Category::class);
    }
    
     public function images()
    {
    	//un producto tiene muchas imagenes
    	return $this->hasMany(ProductImage::class);
    }

    //accesor para una imagen destacada o simple

    public function getFeaturedImageUrlAttribute(){
        $featuredImage= $this->image()->where("featured", true)->first();
        if(!$featuredImage)
            $featuredImage= $this->images()->first();
        
        if($featuredImage){
            return $featuredImage->url;
        }
        return "/images/products/default.jpg";

    }
}
