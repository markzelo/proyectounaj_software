<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	// un carrito tiene muchos detalles
    public function details(){
    	return $this->hasMany(CartDetail::class);
    }
}
