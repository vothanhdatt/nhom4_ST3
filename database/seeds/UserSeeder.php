<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Nhóm 4',
            'email' => 'nhom4@gmail.com',
            'password' => '12345678',
            'avatar' => 'pitrest6.jpg',
            'address' => 'HCM',
            'phone-number' => '123456789',
            'gender' => 'Nam',
            'cover-image' => 'pitrest6.jpg'
        ]);
       
    }
}
