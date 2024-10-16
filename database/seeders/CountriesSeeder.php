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
            ['country' => 'Argentina', 'callsign' => '54'],
            ['country' => 'Bolivia', 'callsign' => '591'],
            ['country' => 'Brasil', 'callsign' => '55'],
            ['country' => 'Chile', 'callsign' => '56'],
            ['country' => 'Colombia', 'callsign' => '57'],
            ['country' => 'Costa Rica', 'callsign' => '506'],
            ['country' => 'Cuba', 'callsign' => '53'],
            ['country' => 'Ecuador', 'callsign' => '593'],
            ['country' => 'El Salvador', 'callsign' => '503'],
            ['country' => 'España', 'callsign' => '34'],
            ['country' => 'Guatemala', 'callsign' => '502'],
            ['country' => 'México', 'callsign' => '52'],
            ['country' => 'Nicaragua', 'callsign' => '505'],
            ['country' => 'Panamá', 'callsign' => '507'],
            ['country' => 'Paraguay', 'callsign' => '595'],
            ['country' => 'Perú', 'callsign' => '51'],
            ['country' => 'Portugal', 'callsign' => '351'],
            ['country' => 'Puerto Rico', 'callsign' => '787'],
            ['country' => 'Uruguay', 'callsign' => '598'],
            ['country' => 'Venezuela', 'callsign' => '58'],
        ];

        DB::table('countries')->insert($countries);
    }
}
