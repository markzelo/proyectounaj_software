<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
        	'name' => 'Proyecto A',
        	'description' => 'El proyecto A consiste en reparaciones en el sector   de redes.'
        ]);

        Project::create([
        	'name' => 'Proyecto B',
        	'description' => 'El proyecto B consiste en mantenimiento en el sector del sistema  de alarmas.'
        ]);

         Project::create([
            'name' => 'Proyecto C',
            'description' => 'El proyecto C consiste en trabajos de reaparaciones en el sector  de datacenter'
        ]);

          Project::create([
            'name' => 'Proyecto D',
            'description' => 'El proyecto D consiste trabajos de  mantenimento de  software en area tecnica.'
        ]);
           Project::create([
            'name' => 'Proyecto H',
            'description' => 'El proyecto D consiste trabajos de  reparaciones en oficina tecnica de diseño.'
        ]);
    }
}
