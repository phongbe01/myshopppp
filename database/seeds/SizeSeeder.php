<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = new  Size();
        $size->size = 'M';
        $size->save();

        $size = new  Size();
        $size->size = 'L';
        $size->save();

        $size = new  Size();
        $size->size = 'XL';
        $size->save();

        $size = new  Size();
        $size->size = 'XXL';
        $size->save();
    }
}
