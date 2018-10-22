<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class CartDetail extends Model
{
	public function carts(){
    	return $this->belongsTo(Cart::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
