<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Laptop Dell Insprion';
        $product->slug = Str::slug('Laptop Dell Insprion');
        $product->desc = 'Laptop cua moi nha' ;
        $product->price = 17000000 ;
        $product->image = 'dell.jpg';
//        $product->category_id = 2;
        $product->save();
    }
}
