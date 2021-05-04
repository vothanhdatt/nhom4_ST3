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
        DB::table('post')->insert([
            'id_user' => 'Nhom 4',
            'title' => 'Nhom 4444444444',
            'like'  => 10,
            'id_comment' => '1',
            'image' => 'pitrest6.jpg'
        ]);
    }
}
