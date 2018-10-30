<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Madcoda\Youtube\Youtube;

class YoutubeController extends Controller
{
    //solo usuarios administradores acceden opcion:auth,admin,etc
   public function __construct()
    {
        $this->middleware('admin');
    }
    
     public function index()
     {
        return \View::make('youtube.index'); 
    }

    // public function index()
    // {
    //     dd(Youtube::getVideoInfo(Input::get('vid', 'dQw4w9WgXcQ')));
    // }

    public function search()
    {
        $word = Input::get('search');
 
        $youtube = new \Madcoda\Youtube(array('key' => 'AIzaSyDeIjqoqri3hp2t9_rmCZCvvAqT-hrwsl0'));
 
        // Parametros
        $params = array(
            'q' => $word,
            'type' => 'video',
            'part' => 'id, snippet',
            'maxResults' => 20    //Número de resultados
        );
 
        // Hacer la busqueda con los parametros
        $videos = $youtube->searchAdvanced($params, true);
 
        return \View::make('youtube.index', compact('videos'));
    }
}
