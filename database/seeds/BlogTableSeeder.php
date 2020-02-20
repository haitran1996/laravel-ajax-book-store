<?php

use App\Category;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->title = 'Quoc dan 18cm la co that';
        $blog->content = 'yuf hdu fheidu d h hiudh ueh fu  hduh geihidhg oiefgyfeoi hgeoi heoih goieirhg oieg hei ';
        $blog->user_id = '2';
        $blog->save();
    }
}
