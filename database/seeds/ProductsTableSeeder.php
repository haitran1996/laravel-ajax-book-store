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
        $product->desc = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five' ;
        $product->price = mt_rand(5,50)*10000 ;
        $product->image = $product->slug.'.jpg';
        $product->category_id = mt_rand(1,5);
        $product->save();
    }

    public function run()
    {
        for($i=0; $i<10; $i++) {
            $this->createProduct('7 Thói quen của bạn trẻ thành đạt');
            $this->createProduct('A mind for numbers');
            $this->createProduct('Đắc nhân tâm');
            $this->createProduct('Hôm nay tôi thất tình');
            $this->createProduct('Pháo đài số');
        }
    }
}
