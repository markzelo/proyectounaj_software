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
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    

    return [
        'image' => $faker->imageUrl(250, 250),   //url ficticia aleatoria
        'product_id' => $faker->numberBetween(1, 100)
        
    ];
});
