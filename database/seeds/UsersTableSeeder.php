<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::create([
        	'name' => 'marx',
            'lastname' =>'sanchez',
            'fhone' =>'2-234-2345',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 0
        ]);

        // Client
        User::create([
        	'name' => 'Lass',
            'lastname' =>'ilia',
            'fhone' =>'2-234-2345',
        	'email' => 'cliente@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 2
        ]);
    }
}
