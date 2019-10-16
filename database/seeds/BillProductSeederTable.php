<?php

use App\Bill;
use Illuminate\Database\Seeder;

class BillProductSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = Bill::find(1);
        $bill->product()->attach(2);
        $bill->product()->attach(1);

        $bill = Bill::find(2);
        $bill->product()->attach(2);
        $bill->product()->attach(1);
        $bill->product()->attach(3);


    }
}
