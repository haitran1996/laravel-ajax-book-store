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

    public function createProduct($name)
    {
        $product = new Product();
        $product->name = "$name";
        $product->slug = Str::slug("$name");
        $product->desc = 'Hay' ;
        $product->price = 200000 ;
        $product->image = $product->slug.'.jpg';
        $product->category_id = 1;
        $product->save();
    }
    public function run()
    {
        for($i=0; $i<20; $i++) {
            $this->createProduct('7 Thói quen của bạn trẻ thành đạt');
            $this->createProduct('A mind for numbers');
            $this->createProduct('Đắc nhân tâm');
            $this->createProduct('Hôm nay tôi thất tình');
            $this->createProduct('Pháo đài số');
        }
    }
}
