<?php

use App\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail = new ProductDetail();
        $detail->product_id = '1';
        $detail->size = 'M';
        $detail->color = 'Black';
        $detail->type = 'Clothes';
        $detail->sex = 'men';
        $detail->quantity = '100';
        $detail->save();

        $detail = new ProductDetail();
        $detail->product_id = '2';
        $detail->size = 'L';
        $detail->color = 'White';
        $detail->type = 'Clothes';
        $detail->sex = 'woman';
        $detail->quantity = '100';
        $detail->save();

        $detail = new ProductDetail();
        $detail->product_id = '1';
        $detail->size = 'L';
        $detail->color = 'White';
        $detail->type = 'Clothes';
        $detail->sex = 'men';
        $detail->quantity = '100';
        $detail->save();
    }
}
