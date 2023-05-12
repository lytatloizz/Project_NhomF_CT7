<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subjects')->insert([
            'subject_name' => 'Hoa hoc',
            'subject_description' => '',
            'subject_numbers' => 50,
            'start_at' => '07:00:00',
            'end_at' => '11:30:00',
            'week_day' => 3,
            'user_id' => 1,
            'classroom_id' => 1
        ]);
        DB::table('subjects')->insert([
            'subject_name' => 'Hinh hoc',
            'subject_description' => '',
            'subject_numbers' => 50,
            'start_at' => '07:00:00',
            'end_at' => '11:30:00',
            'week_day' => 2,
            'user_id' => 1,
            'classroom_id' => 1
        ]);
        DB::table('subjects')->insert([
            'subject_name' => 'Ngu Van',
            'subject_description' => '',
            'subject_numbers' => 50,
            'start_at' => '07:00:00',
            'end_at' => '11:30:00',
            'week_day' => 6,
            'user_id' => 1,
            'classroom_id' => 2
        ]);
    }
}
