<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->product_code = 'TS001';
        $product->product_name = 'ao so mi ';
        $product->price = '200000';
        $product->image = 'img/product/anh1.jpg';
        $product->save();

        $product = new Product();
        $product->product_code = 'TS001';
        $product->product_name = 'ao so mi ';
        $product->price = '300000';
        $product->image = 'img/product/anh1.jpg';
        $product->save();

        $product = new Product();
        $product->product_code = 'TS001';
        $product->product_name = 'ao so mi ';
        $product->price = '400000';
        $product->image = 'img/product/anh2.png';
        $product->save();

        $product = new Product();
        $product->product_code = 'TS002';
        $product->product_name = 'ao chong nang ';
        $product->price = '500000';
        $product->image = 'img/product/anh2.png';
        $product->save();

        $product = new Product();
        $product->product_code = 'TS001';
        $product->product_name = 'ao so mi ';
        $product->price = '250000';
        $product->image = 'img/product/anh1.jpg';
        $product->save();

        $product = new Product();
        $product->product_code = 'TS002';
        $product->product_name = 'ao chong nang ';
        $product->price = '300000';
        $product->image = 'img/product/anh2.png';
        $product->save();



    }
}
