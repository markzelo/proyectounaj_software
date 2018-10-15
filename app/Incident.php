<?php
                                    
namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    public static $rules= [
            "category_id"=>"sometimes|exists:categories,id",
            "severity"=>"required|in:M,N,A",
            "title"=>"required|min:5",
            "description"=>"required|min:15"
        ];
    public static $messages=[

            "title.required"=>"debe ingresar un titulo.",
            "title.min"=>"el titulo debe tener 5 caracteres",
            "description.required"=>"es necesario ingresar algo",
            "description.min"=>"debe tener al mos 15 letras"

        ];
    

    //crear relacion
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function support()
    {
        //muchos reportes le pertenese aun usuario particular le pasamos el nombre de campo de la clave fk eligida
        return $this->belongsTo('App\User', 'support_id');
    }

    public function client()
    {
        return $this->belongsTo('App\User', 'client_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

     public function messages()
    {
        //una incidencia tiene muchos msj
        return $this->hasMany('App\Message');   
    }



    // accessors para devolver el atributo del accesor

    public function getSeverityFullAttribute()
    {
        //caracter de usuario en reporte
        switch ($this->severity) {
            case 'M':
                return 'Menor';

            case 'N':
                return 'Normal';
            
            default:
                return 'Alta';
        }
    }

    // category_name
    public function getCategoryNameAttribute()
    {
        //si existe una categoria asociada
        if ($this->category)
            return $this->category->name;

        return 'General';
    }
    //support name
    public function getSupportNameAttribute()
    {
        if ($this->support)
            return $this->support->name;

        return 'Sin asignar';
    }

    
    //restringe el campo del resumen en el dashboard en el titulo .....
    public function getTitleShortAttribute()
    {
        return mb_strimwidth($this->title, 0, 12, '...');
    }

   //campo calculado estados

    public function getStateAttribute()
    {
        if ($this->active == 0)
            return 'Resuelto';
        //si tiene un valor asignado
        if ($this->support_id)
            return 'Asignado';
        // o
        return 'Pendiente';
    }

}
