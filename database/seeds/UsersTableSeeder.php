<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user->name = "admin";
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin123');
        $user->save();

        for ($i=0; $i<10;$i++) {
            $user = new User();
            $user->name = Str::random(6);
            $user->email = Str::random(8) . '@gmail.com';
            $user->password = Hash::make('123456');
            $user->save();
        }
    }
}
