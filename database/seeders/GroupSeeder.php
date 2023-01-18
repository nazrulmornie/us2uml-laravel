<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = [
            ['id' => 1, 'group' => 'Industry Professional'],
            ['id' => 2, 'group' => 'Students'],
            ['id' => 3, 'group' => 'Other'],
        ];

        DB::table('user_groups')->insert($group);
    }
}
