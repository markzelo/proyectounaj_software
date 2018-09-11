<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([ // 1
        	'name' => 'Atención  teléfonica',
        	'project_id' => 1
    	]);
    	Level::create([ // 2
        	'name' => 'Envío de personal técnico',
        	'project_id' => 1
    	]);

    	Level::create([ // 3
        	'name' => 'Mesa de ayuda de entrada',
        	'project_id' => 2
    	]);
    	Level::create([ // 4
        	'name' => 'Consulta especializada por ingeniero',
        	'project_id' => 2
    	]);
    }
}
