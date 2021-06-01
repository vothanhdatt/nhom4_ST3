<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'id_user' => 4,
            'id_comment' => 1,
            'content' => 'Bài viết thứ 1',
            'images' => 'pitrest6.jpg',
            'like' => '15',
            'permission' => 'public'
        ]);
        DB::table('posts')->insert([
            'id_user' => 4,
            'id_comment' => 1,
            'content' => 'Bài viết thứ 2',
            'images' => 'pitrest6.jpg',
            'like' => '15',
            'permission' => 'public'
        ]);
        DB::table('posts')->insert([
            'id_user' => 4,
            'id_comment' => 1,
            'content' => 'Bài viết thứ 3',
            'images' => 'pitrest6.jpg',
            'like' => '15',
            'permission' => 'public'
        ]);
        DB::table('posts')->insert([
            'id_user' => 4,
            'id_comment' => 1,
            'content' => 'Bài viết thứ 4',
            'images' => 'pitrest6.jpg',
            'like' => '15',
            'permission' => 'public'
        ]);
    }
}
