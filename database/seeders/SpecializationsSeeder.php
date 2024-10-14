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
            ['specializations' => 'Psicología Forense'],
            ['specializations' => 'Psicología Penitenciaria'],
            ['specializations' => 'Psicología de la Investigación Criminal'],
            ['specializations' => 'Psicología de la Victimización Criminal']
        ];

        DB::table('specializations')->insert($specializations);
    }
}
