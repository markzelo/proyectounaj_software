<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 20)->create();
       // factory(ProductImage::class, 30)->create();

    }
}
