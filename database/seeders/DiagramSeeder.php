<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diagram_type = [
            ['id' => 1, 'diagram_name' => 'UML Use Case Diagram'],
            ['id' => 2, 'diagram_name' => 'Goal Model'],
        ];



        DB::table('diagram_types')->insert($diagram_type);
    }
}
