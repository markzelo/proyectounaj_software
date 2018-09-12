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
			'name' => 'Categoría A1',
            'description' => 'Area superior de sistemas de redes',
            
			'project_id' => 1
        ]);
        Category::create([
			'name' => 'Categoría A2',
            'description' => 'Area media de sistemas de redes',
			'project_id' => 1
        ]);

        Category::create([
			'name' => 'Categoría B1',
            'description' => 'Area superior de centro de datos',
			'project_id' => 2
        ]);
        Category::create([
			'name' => 'Categoría B2',
            'description' => 'Area media de centro de datos',
			'project_id' => 2
        ]);
        Category::create([
            'name' => 'Categoría A2',
            'description' => 'Area media de sistemas de redes',
            'project_id' => 3
        ]);
        Category::create([
            'name' => 'Categoría B1',
           'description' => 'Area superior de centro de datos',
            'project_id' => 4
        ]);
    }
}
