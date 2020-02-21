<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new \App\Author();
        $author->name  = 'Dinh Thanh Tung';
        $author->save();

        $author = new \App\Author();
        $author->name  = 'Tran Van Hai';
        $author->save();
    }
}
