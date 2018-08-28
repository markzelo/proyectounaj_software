<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;//directiva use para usar la clse controller

class UserController extends Controller
{
    public function index(){
    	return "Ruta /usuarios resuelta por usercontroller@index";
    }
}
