<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Quốc Dân';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin');
        $user->save();
    }
}
