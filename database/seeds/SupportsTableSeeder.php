<?php

use Illuminate\Database\Seeder;
use App\User;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin id1 client id 2
       //tecnico
         // Support - Project 1
        User::create([ //id 3
        	'name' => 'Soporte S1',//usuario tecnico de nivel 1
        	'lastname' =>'cortazar',
            'fhone' =>'2-234-2345',
            'email' => 'soporte1@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 1
        ]);
        User::create([ // id4
        	'name' => 'Soporte S2',
            'lastname' =>'napoleon',
            'fhone' =>'2-234-2345',
        	'email' => 'soporte2@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 1
        ]);
        User::create([ // id5
            'name' => 'Soporte S3',
            'lastname' =>'albor',
            'fhone' =>'2-234-2345',
            'email' => 'soporte3@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1
        ]);
    }
}
