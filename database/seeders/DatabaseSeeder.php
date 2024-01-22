<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(OfficesSeeder::class);
        $this->call(CentersSeeder::class);
        $this->call(ChecklistsSeeder::class);
        $this->call(ChecklistsSeeder1::class);
        $this->call(ChecklistsSeeder2::class);
        $this->call(ChecklistsSeeder3::class);
        $this->call(ChecklistsSeeder4::class);
        $this->call(ChecklistsSeeder5::class);
        $this->call(ChecklistsSeeder6::class);
        $this->call(ChecklistsSeeder7::class);
        $this->call(ChecklistsSeeder8::class);
        $this->call(ChecklistsSeeder9::class);
        $this->call(ChecklistsSeeder10::class);
        $this->call(ChecklistsSeeder11::class);
        $this->call(ChecklistsSeeder12::class);
        $this->call(ChecklistsSeeder13::class);
        $this->call(ChecklistsSeeder14::class);
    }
}
