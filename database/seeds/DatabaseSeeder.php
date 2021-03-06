<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //dato de semilla para migrar con dato previo siempre se invoca siguiendo un orden en la jeraquia de las tablas
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(SupportsTableSeeder::class);
        $this->call(ProjectsUserTableSeeder::class);
        $this->call(IncidentsTableSeeder::class);

        $this->call(ProductsTableSeeder::class);

    }
}
