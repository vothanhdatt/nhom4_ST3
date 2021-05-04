<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'id_cmt' => 'cmt1',
            'id_user' => 'Dattttt',
            'content' => 'Test cái cmt',
        ]);
    }
}
