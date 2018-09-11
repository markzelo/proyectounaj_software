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

             //claves fk
        	'category_id' => 2,
        	'project_id' => 1,
        	'level_id' => 1,

        	'client_id' => 2,
        	'support_id' => 3 //usuario 3 soporte s1
    	]);
    }
}
