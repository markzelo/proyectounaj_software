<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
   public function api()
    {
        $data = array(); //declaramos un array principal que va contener los datos
        $id = Evento::all()->lists('id'); //listamos todos los id de los eventos
        $lugar = Evento::all()->lists('lugar'); //lo mismo para lugar y fecha
        $fecha = Evento::all()->lists('fecha');
        $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos
 
        //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for($i=0;$i&lt;$count;$i++){
            $data[$i] = array(
                "title"="$lugar[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
                "start"="$fecha[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
                "url"="http://localhost/proyectos/tesis/public/evento/".$id[$i]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }
 
        return response()->json($data); //para luego retornarlo y estar listo para consumirlo
 
    }
}
