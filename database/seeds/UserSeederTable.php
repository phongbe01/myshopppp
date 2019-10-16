<?php

use App\User;
use Illuminate\Database\Seeder;

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
        $user->password = '123123abc';
        $user->save();

        $user = new User();
        $user->name = 'phong2';
        $user->phone = '0121212121';
        $user->email = 'phongbe02@gmail.com';
        $user->password = '123123abc';
        $user->save();

        $user = new User();
        $user->name = 'phong3';
        $user->phone = '0121212121';
        $user->email = 'phongbe03@gmail.com';
        $user->password = '123123abc';
        $user->save();

        $user = new User();
        $user->name = 'phong4';
        $user->phone = '0121212121';
        $user->email = 'phongbe04@gmail.com';
        $user->password = '123123abc';
        $user->save();

        $user = new User();
        $user->name = 'phong5';
        $user->phone = '0121212121';
        $user->email = 'phongbe05@gmail.com';
        $user->password = '123123abc';
        $user->save();
    }
}
