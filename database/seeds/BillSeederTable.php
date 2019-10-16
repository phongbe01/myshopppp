<?php

use App\Bill;
use Illuminate\Database\Seeder;

class BillSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = new Bill();
        $bill->user_id =  '1';
        $bill->price = '1000000';
        $bill->payDate = '2019-01-01';
        $bill->payAddress = 'abc';
        $bill->save();

        $bill = new Bill();
        $bill->user_id =  '1';
        $bill->price = '1000000';
        $bill->payDate = '2019-01-01';
        $bill->payAddress = 'abc';
        $bill->save();

        $bill = new Bill();
        $bill->user_id =  '2';
        $bill->price = '1000000';
        $bill->payDate = '2019-01-01';
        $bill->payAddress = 'abc';
        $bill->save();

        $bill = new Bill();
        $bill->user_id =  '3';
        $bill->price = '1000000';
        $bill->payDate = '2019-01-01';
        $bill->payAddress = 'abc';
        $bill->save();

        $bill = new Bill();
        $bill->user_id =  '2';
        $bill->price = '1000000';
        $bill->payDate = '2019-01-01';
        $bill->payAddress = 'abc';
        $bill->save();
    }
}
