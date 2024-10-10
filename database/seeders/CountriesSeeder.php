<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Country::factory()->create([
        //     'country' => 'Test User',
        //     'callsign' => 'test@example.com',
        //     'status_country' => '1',
        // ]);
        $countries = [
            ['country' => 'México', 'callsign' => '52'],
            ['country' => 'Brasil', 'callsign' => '55'],
            ['country' => 'Argentina', 'callsign' => '54'],
            ['country' => 'Colombia', 'callsign' => '57'],
            ['country' => 'España', 'callsign' => '34'],
            ['country' => 'Francia', 'callsign' => '33'],
            ['country' => 'Ecuador', 'callsign' => '593']
        ];

        DB::table('countries')->insert($countries);
    }
}
