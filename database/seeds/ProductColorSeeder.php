<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::find(1);
        $product->color()->attach(1);
        $product->color()->attach(2);
        $product->color()->attach(3);

        $product = Product::find(2);
        $product->color()->attach(1);
        $product->color()->attach(2);
        $product->color()->attach(3);

        $product = Product::find(3);
        $product->color()->attach(1);
        $product->color()->attach(2);
        $product->color()->attach(3);

    }
}
