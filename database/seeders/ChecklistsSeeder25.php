<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder25 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 25,
            'visa_type' => 'Fees',
            'title' => 'Berlin Center Fees',
            'description' => 'Coming soon!',
            'file_name' => '',
        ]);
    }
}
