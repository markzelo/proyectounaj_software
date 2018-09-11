<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Categoria A1',
        	'description' => "El proyecto A consiste en ...",
        	'project_id' => 1
        ]);

        Category::create([
        	'name' => 'Categoria B1',
        	'description' => "El proyecto B consiste en ...",
        	'project_id' => 2
        ]);

        Category::create([
        	'name' => 'Categoria A2',
        	'description' => "El proyecto A consiste en ...",
        	'project_id' => 1
        ]);

        Category::create([
        	'name' => 'Categoria B2',
        	'description' => "El proyecto B consiste en ...",
        	'project_id' => 2
        ]);

    }
}
