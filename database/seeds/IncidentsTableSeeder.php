<?php

use Illuminate\Database\Seeder;
use App\Incident;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Incident::create([
        	'title' => 'incidencia en sala de sistemas administrativo',
        	'description' => 'jubo un desperfecto de cableado de red en las oficnas .',
        	'severity' => 'N',//niveles de severidad a n b 
            'organization' => 'administracion.',

             //claves fk
        	'category_id' => 2,
        	'project_id' => 1,
        	'level_id' => 1,
        	'client_id' => 2,
        	'support_id' => 3 //usuario 3 soporte s1
    	]);
          Incident::create([
            'title' => 'incidencia en sala de datacencer',
            'description' => 'hubo un desperfecto en unidades de disco .',
            'severity' => 'A',//niveles de severidad a n b 
            'organization' => 'centro de datos.',

             //claves fk
            'category_id' => 3,
            'project_id' => 1,
            'level_id' => 1,

            'client_id' => 2,
            'support_id' => 4 //usuario 4 soporte s2
        ]);
    }
}
