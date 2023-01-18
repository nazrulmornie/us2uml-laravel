<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = [
            ['id' => 1, 'genders' => 'Male'],
            ['id' => 2, 'genders' => 'Female'],
            ['id' => 3, 'genders' => 'Rather Not Say'],
        ];

        DB::table('gender')->insert($gender);
    }
}
