<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Faker\Generator as Faker;//alias
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    


    return [
        'name' => substr($faker->sentence(3), 0, -1),   //sola las 3 palabras - el ultimo punto
        'description' => $faker->sentence(10),//oracion de 10 palabras
        'long_description' =>  $faker->text,
        'price' => $faker->randomFloat(2,5,100)//numero de decimales  MAX DE NUM min 5 
    ];
});
