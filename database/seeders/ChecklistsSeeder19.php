<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder19 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 19,
            'visa_type' => 'Fees',
            'title' => 'New York Center Fees',
            'description' => 'Coming soon!',
            'file_name' => '',
        ]);
    }
}
