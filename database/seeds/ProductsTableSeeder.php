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
        $product->name = 'Mind for numbers';
        $product->slug = Str::slug('Mind for numbers');
        $product->desc = 'Cách vượt qua toán và khoa học ngay cả khi bạn vừa mới trượt môn toán.' ;
        $product->price = 120000 ;
        $product->image = 'mind-for-numbers.jpg';
        $product->save();

        $product = new Product();
        $product->name = 'Đắc nhân tâm';
        $product->slug = Str::slug('Đắc nhân  tâm');
        $product->desc = 'Cách chinh phục những người xung quanh ban.' ;
        $product->price = 170000 ;
        $product->image = 'dac-nhan-tam.jpg';
        $product->save();
    }
}
