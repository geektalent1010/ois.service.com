<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class DatabaseChecklistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::truncate();
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
        $this->call(ChecklistsSeeder15::class);
        $this->call(ChecklistsSeeder16::class);
        $this->call(ChecklistsSeeder17::class);
        $this->call(ChecklistsSeeder18::class);
        $this->call(ChecklistsSeeder19::class);
        $this->call(ChecklistsSeeder20::class);
        $this->call(ChecklistsSeeder21::class);
        $this->call(ChecklistsSeeder22::class);
        $this->call(ChecklistsSeeder23::class);
        $this->call(ChecklistsSeeder24::class);
        $this->call(ChecklistsSeeder25::class);
        $this->call(ChecklistsSeeder26::class);
        $this->call(ChecklistsSeeder27::class);
        $this->call(ChecklistsSeeder28::class);
        $this->call(ChecklistsSeeder56::class);
    }
}
