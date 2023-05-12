<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "user_name" => 'tat loi',
            'user_email' => 'tatloi@gmail.com',
            "password" => Hash::make('123456'),
            'user_phone' => '083217612',
            "user_image" => 'mio1080p.png',
            'user_rule' => 0
        ]);
    }
}
