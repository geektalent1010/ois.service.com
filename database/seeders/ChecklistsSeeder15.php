<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder15 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 15,
            'visa_type' => 'Fees',
            'title' => 'Los Angeles Center Fees',
            'description' => 'Coming soon!',
            'file_name' => '',
        ]);
    }
}
