<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()

    {
    	//una producto pertenece a una categoria
    	return $this->belongsTo(Category::class);
    }
    
     public function images()

    {
    	
    	return $this->hasMany(ProductImage::class);
    }
    //accesor para una imagen destacada o simple

    public function getFeaturedImageUrlAttribute(){
        //don el campo fuatured sea true exista o a la primera que se encuentra asociada
        $featuredImage= $this->images()->where("featured", true)->first();
        if(!$featuredImage)
            $featuredImage= $this->images()->first();
        

        //url campo calculado de product image
         if($featuredImage){
            return $featuredImage->url;
        }
        return "/images/products/default.jpg";

    }

     public function cartdetail(){
        return $this->hasMany(CartDetail::class);
    }




}
