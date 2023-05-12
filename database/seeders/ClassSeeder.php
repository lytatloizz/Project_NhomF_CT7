<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('classrooms')->insert([
            'class_name' => 'A001'
        ]);
        DB::table('classrooms')->insert([
            'class_name' => 'A002'
        ]);
        DB::table('classrooms')->insert([
            'class_name' => 'A003'
        ]);
    }
}
