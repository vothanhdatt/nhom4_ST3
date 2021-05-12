<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'id_user' => 'Nhom 4',
            'title' => 'Bài viết số 1',
            'like'  => 10,
            'id_comment' => '1',
            'image' => 'pitrest6.jpg'
        ]);
        DB::table('posts')->insert([
            'id_user' => 'Nhom 4',
            'title' => 'Bài viết số 2',
            'like'  => 10,
            'id_comment' => '1',
            'image' => 'pitrest6.jpg'
        ]);

        DB::table('posts')->insert([
            'id_user' => 'Nhom 4',
            'title' => 'Bài viết số 3',
            'like'  => 10,
            'id_comment' => '1',
            'image' => 'pitrest6.jpg'
        ]);
        DB::table('posts')->insert([
            'id_user' => 'Nhom 4',
            'title' => 'Bài viết số 4',
            'like'  => 10,
            'id_comment' => '1',
            'image' => 'pitrest6.jpg'
        ]);
    }
}
