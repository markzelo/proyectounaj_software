<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	//esto pertene a un solo producto
	public function products(){
		return $this->belongsTo(Product::class);
	}
}
