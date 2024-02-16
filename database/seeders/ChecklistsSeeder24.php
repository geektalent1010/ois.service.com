<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder24 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 24,
            'visa_type' => 'Fees',
            'title' => 'Washington DC Center Fees',
            'description' => '1. Flexi Appointment $50<br/><br/>
            This enables applicants arrive at the VAC at any time during the opening hours on the day of the appointment.<br/><br/>
            2. Prime Time Appointment $50<br/><br/>
            This is available for persons who can’t make it to the VAC during regular business hours.<br/><br/>
            3. Keep my passport $40<br/><br/>
            Applicants can submit their application without submitting their physical passport.<br/><br/>
            4. Express Courier Return $10<br/><br/>
            Passports will be couriered back to applicants.<br/><br/>
            5. Door Step Biometrics $50<br/><br/>
            Applicants can invite the VAC to pick up their application and biometrics. passport.<br/><br/>
            6. Frequent Traveller $--<br/><br/>
            Non specified.',
            'file_name' => '',
        ]);
    }
}
