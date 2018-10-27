<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
//     return $this->belongsTo(Product::class);

     //esto pertene a un solo producto
	public function products(){
		return $this->belongsTo(Product::class);
	}

	//campo calculado para saber si la imagen es una url o esta en local
	public function getUrlAttribute(){
		if(substr($this->image, 0, 4) === "http"){
			return $this->image;

         }
         return "/images/products/" .$this->image;

	}
}
