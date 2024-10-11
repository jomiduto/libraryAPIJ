<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
            ['specializations' => 'Penal'],
            ['specializations' => 'Laboral'],
            ['specializations' => 'Familiar'],
            ['specializations' => 'Ambiental']
        ];

        DB::table('specializations')->insert($specializations);
    }
}
