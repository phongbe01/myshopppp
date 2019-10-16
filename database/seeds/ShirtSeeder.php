<?php

use App\Shirt;
use Illuminate\Database\Seeder;

class ShirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shirt = new Shirt();
        $shirt->product_id = '1';
        $shirt->color = 'Trắng';
        $shirt->size = 'M';
        $shirt->save();

        $shirt = new Shirt();
        $shirt->product_id = '1';
        $shirt->color = 'Den';
        $shirt->size = 'L';
        $shirt->save();

        $shirt = new Shirt();
        $shirt->product_id = 'TS002';
        $shirt->color = 'Trắng';
        $shirt->size = 'M';
        $shirt->save();

        $shirt = new Shirt();
        $shirt->product_id = 'TS002';
        $shirt->color = 'Den';
        $shirt->size = 'L';
        $shirt->save();

        $shirt = new Shirt();
        $shirt->product_id = 'TS001';
        $shirt->color = 'Trắng';
        $shirt->size = 'XL';
        $shirt->save();

        $shirt = new Shirt();
        $shirt->product_id = 'TS001';
        $shirt->color = 'Trắng';
        $shirt->size = 'M';
        $shirt->save();


    }
}
