<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'phong1';
        $user->phone = '0121212121';
        $user->email = 'phongbe01@gmail.com';
        $user->password = Hash::make('123123abc');
        $user->role = '2';
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->phone = '0121212121';
        $user->email = 'phongbe00@gmail.com';
        $user->password = Hash::make('123123abc');
        $user->role = '1';
        $user->save();
    }
}
