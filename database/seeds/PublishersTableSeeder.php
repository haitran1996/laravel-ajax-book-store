<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new \App\Publisher();
        $publisher->name = 'Kim Dong';
        $publisher->save();

        $publisher = new \App\Publisher();
        $publisher->name = 'Giai Phong';
        $publisher->save();
    }
}
