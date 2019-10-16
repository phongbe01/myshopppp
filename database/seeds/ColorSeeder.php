<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = new Color();
        $color->color = 'Trang';
        $color->save();

        $color = new Color();
        $color->color = 'Den';
        $color->save();
    }
}
