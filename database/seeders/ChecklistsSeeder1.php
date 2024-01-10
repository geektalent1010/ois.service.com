<?php

namespace Database\Seeders;

use App\Checklist;
use Illuminate\Database\Seeder;

class ChecklistsSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'UN',
            'title' => 'Employment Visa- INGO – R5A',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. 2.	Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. MoU with Nigerian Planning Commision (NPC) and appropriate security clearence (for special security cases)  <br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R5A Employment Visa- INGO.doc',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'UN',
            'title' => 'Employment Visa- Spouse of INGO Staff – R5B',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. 2.	Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. MoU with Nigerian Planning Commision (NPC) and appropriate security clearence (for special security cases)  <br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R5B Employment Visa- Spouse of INGO.doc',
        ]);
    }
}
