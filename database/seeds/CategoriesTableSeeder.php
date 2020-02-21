<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'Tieng Anh';
        $category->description = 'Sach Ngoai Ngu';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Tieng Nhat';
        $category->description = 'Sach Ngoai Ngu';
        $category->save();
    }
}
