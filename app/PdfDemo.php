<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfDemo extends Model
{


	public static $rules = [
        'title' => 'required'
    ];

    public static $messages = [
        'name.required' => 'Es necesario ingresar un título para el archivo.'
    ];


    public function user()

    {
    	
    }
}
