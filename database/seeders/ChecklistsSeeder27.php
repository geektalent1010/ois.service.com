<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder27 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 27,
            'visa_type' => 'Fees',
            'title' => 'Istanbul Center Fees',
            'description' => 'Coming soon!',
            'file_name' => '',
        ]);
    }
}
