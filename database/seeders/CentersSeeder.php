<?php

namespace Database\Seeders;

use App\Center;
use Illuminate\Database\Seeder;

class CentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Center::create([
            'name' => 'ANKARA',
            'city' => 'ANKARA',
            'country' => 'Turkey',
        ]);
        Center::create([
            'name' => 'CAIRO',
            'city' => 'CAIRO',
            'country' => 'Egypt',
        ]);
        Center::create([
            'name' => 'BEIJING',
            'city' => 'BEIJING',
            'country' => 'China',
        ]);
        Center::create([
            'name' => 'GUANGZHOU',
            'city' => 'GUANGZHOU',
            'country' => 'China',
        ]);
        Center::create([
            'name' => 'SHANGHAI',
            'city' => 'SHANGHAI',
            'country' => 'China',
        ]);
        Center::create([
            'name' => 'DUBAI',
            'city' => 'DUBAI',
            'country' => 'UAE',
        ]);
        Center::create([
            'name' => 'MUMBAI',
            'city' => 'MUMBAI',
            'country' => 'India',
        ]);
        Center::create([
            'name' => 'BEIRUT',
            'city' => 'BEIRUT',
            'country' => 'Lebanon',
        ]);
        Center::create([
            'name' => 'PARIS',
            'city' => 'PARIS',
            'country' => 'France',
        ]);
        Center::create([
            'name' => 'ROME',
            'city' => 'ROME',
            'country' => 'Italy',
        ]);
        Center::create([
            'name' => 'JOHANNESBURG',
            'city' => 'JOHANNESBURG',
            'country' => 'South Africa',
        ]);
        Center::create([
            'name' => 'THE_HAGUE',
            'city' => 'THE HAGUE',
            'country' => 'Netherlands',
        ]);
        Center::create([
            'name' => 'LONDON',
            'city' => 'LONDON',
            'country' => 'UK',
        ]);
        Center::create([
            'name' => 'CHICAGO',
            'city' => 'CHICAGO',
            'country' => 'USA',
        ]);
    }
}
