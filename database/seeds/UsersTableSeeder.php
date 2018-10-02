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
            'phone' =>'2-234-2345',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 0
        ]);

        // Client
        User::create([
        	'name' => 'Lass',
            'lastname' =>'ilia',
            'phone' =>'2-234-2345',
        	'email' => 'cliente@gmail.com',
        	'password' => bcrypt('123456'),
        	'role' => 2
        ]);

        User::create([
            'name' => 'admin',
            'lastname' =>'sanchez',
            'phone' =>'2-234-2341',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin_admin'),
            'role' => 0
        ]);

        User::create([
            'name' => 'tec',
            'lastname' =>'sanchez',
            'phone' =>'2-234-2342',
            'email' => 'tec@tec.com',
            'password' => bcrypt('tec_tec'),
            'role' => 1
        ]);

        User::create([
            'name' => 'user',
            'lastname' =>'sanchez',
            'phone' =>'2-234-2343',
            'email' => 'user@user.com',
            'password' => bcrypt('user_user'),
            'role' => 2
        ]);
    }
}
