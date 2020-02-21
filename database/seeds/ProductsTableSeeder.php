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
        $product->name = 'Tiếng Anh lớp 1 ';
        $product->slug = Str::slug('Tiếng Anh lớp 1');
        $product->desc = 'Hay' ;
        $product->price = 17000000 ;
        $product->image = 'tieng-anh-lop-1.jpg';
        $product->category_id = 1;
        $product->author_id = 1;
        $product->publisher_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Tiếng Anh lớp 1 ';
        $product->slug = Str::slug('Tiếng Anh lớp 1');
        $product->desc = 'Hay' ;
        $product->price = 17000000 ;
        $product->image = 'tieng-anh-lop-1.jpg';
        $product->category_id = 1;
        $product->author_id = 1;
        $product->publisher_id = 2;
        $product->save();
    }
}
