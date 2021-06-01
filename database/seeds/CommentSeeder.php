<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            'id_user' => 1,
            'id_post' => 1,
            'id_share' =>0,
            'content' => 'Test cái cmt1'
        ]);
        DB::table('comments')->insert([
            'id_user' => 1,
            'id_post' => 2,
            'id_share' =>0,
            'content' => 'Test cái cmt2'
        ]);
        DB::table('comments')->insert([
            'id_user' => 1,
            'id_post' => 3,
            'id_share' =>0,
            'content' => 'Test cái cmt3'
        ]);
        DB::table('comments')->insert([
            'id_user' => 1,
            'id_post' => 4,
            'id_share' =>0,
            'content' => 'Test cái cmt4'
        ]);
    }
}
