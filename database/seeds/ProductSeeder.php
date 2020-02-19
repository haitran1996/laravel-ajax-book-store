<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Laptop Dell Insprion';
        $product->slug = \Illuminate\Support\Str::slug('Laptop Dell Insprion');
        $product->desc = 'Laptop cua moi nha' ;
        $product->price = 17000000 ;
        $product->image = 'dell.jpg';
//        $product->category_id = 2;
        $product->save();
    }
}
