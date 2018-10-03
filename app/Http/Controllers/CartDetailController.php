<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;

class CartDetailController extends Controller
{
	public function store(Request $request){
		$cartDetail =new CartDetail();
		$cartDetail->cart_id= auth()->user->cart->id;//campo calculado del id del usuario que inicio sesion
		$cartDetail->product_id=$request->product_id;
		$cartDetail->quantity=$request->quantity;
		$cartDetail->save();

		return back();
	}

    
}
