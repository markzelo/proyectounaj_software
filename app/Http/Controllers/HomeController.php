<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     esta funcion te permite reedirigir entre un usuario que iniciaron session
     middle
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function report()
    {
        //inyectar la variable categories para que se accesible para el foreach de report.blade.php 
        $categories = category::where('project_id', 1)->get();
        return view('report')->with(compact('categories'));
    }
}
