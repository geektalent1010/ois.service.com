<?php

namespace Database\Seeders;

use App\Checklist;
use Illuminate\Database\Seeder;

class ChecklistsSeeder extends Seeder
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
            'visa_type' => 'Diplomatic',
            'title' => 'Diplomatic (Non-Accredited) Visa – F2A',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'F2A Diplomatic (Non-Accredited) Visa.doc.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Diplomatic',
            'title' => 'Accredited Diplomat Visa – R1A',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. Letter from Nigeria’s Ministry of Foreign Affairs.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R1A Acreditted Diplomat Visa.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Minor) of Accredited Diplomat Visa– R1C',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. Letter from Nigeria’s Ministry of Foreign Affairs.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R1C Dependat (Minor) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (18years&above) of Accredited Diplomat Visa– R1D',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. Letter from Nigeria’s Ministry of Foreign Affairs.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R1D Dependat (18years&above) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Aged Parents – 65years&above) of Accredited Diplomat Visa– R1E',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            6. Letter from Nigeria’s Ministry of Foreign Affairs.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R1E Dependat (Aged Parents – 65years&above) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Official',
            'title' => 'Employment Visa (Expatriate – Government Official) – R4A',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/>
            Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant. (2 Copies)<br/><br/>
            4. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            5. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            6. Copy of passport or National Identity Card of the signatory who signed the invitation letter. (2 Copies)<br/><br/>
            7. Employment Letter by the Government. (2 Copies)<br/><br/>
            8. Offer and Acceptance Letter (2 Copies)<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R4A Employment Visa (Expatriate – Government Official).docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Official',
            'title' => 'Spouse of Employment  Expatriate Visa (Expatriate – Government Official) – R4B',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/>
            Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant. (2 Copies)<br/><br/>
            4. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            5. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            6. Copy of passport or National Identity Card of the signatory who signed the invitation letter. (2 Copies)<br/><br/>
            7. Letter from the principal immigrant (2 Copies)<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R4B Spouse of Employment  Expatriate Visa (Expatriate – Government Official).docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Official',
            'title' => 'Dependant (Minor) of Employment  Expatriate Visa (Government Official) – R4C',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/>
            Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant. (2 Copies)<br/><br/>
            4. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            5. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            6. Copy of passport or National Identity Card of the signatory who signed the invitation letter. (2 Copies)<br/><br/>
            7. Letter from the principal immigrant (2 Copies)<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R4C Dependat (Minor) of Employment  Expatriate Visa - Government Official.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Official',
            'title' => 'Dependant (18year&above) of Employment  Expatriate Visa (Government Official) – R4D',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/><br/>
            2. If non-Turkish passport holder please see below for additional notes.<br/><br/>
            3. Copy of the first page of the Passport. (2 copies)<br/><br/>
            4. Two Recent Passport sized photographs with white background.<br/><br/>
            5. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant. (2 Copies)<br/><br/>
            6. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            7. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            8. Copy of passport or National Identity Card of the signatory who signed the invitation letter. (2 Copies)<br/><br/>
            9. Letter from the principal immigrant (2 Copies)<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R4D Dependat (18year&above) of Employment  Expatriate Visa (Government Official).docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Official',
            'title' => 'Dependant (Aged Parent- 65years&Above) of Employment  Expatriate Visa (Government Official) – R4E',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport. (2 copies)<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/>
            Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant. (2 Copies)<br/><br/>
            4. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            5. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            6. Copy of passport or National Identity Card of the signatory who signed the invitation letter. (2 Copies)<br/><br/>
            7. Letter from the principal immigrant (2 Copies)<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R4E Dependat (Aged Parent- 65years&Above) of Employment  Expatriate Visa (Government Official).docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Standard',
            'title' => 'Transit Visa – F3B',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/>
            If non-Turkish passport holder please see below for additional notes.<br/><br/>
            2. Copy of the first page of the Passport.<br/><br/>
            3. Two Recent Passport sized photographs with white background.<br/><br/>
            4. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/>
            Onward Ticket to next destination.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'F3B Transit Visa.docx',
        ]);
        Checklist::create([
            'center_id' => 1,
            'visa_type' => 'Standard',
            'title' => 'Business Single Entry Visa – F4A',
            'description' => 'ALL APPLICATIONS TO BE SUBMITTED TO OIS SERVICES IN ANKARA.<br/><br/>
            APPLICATIONS SUBMITTED AFTER 11.30 PM FOR EXPRESS AND APPLICATIONS SUBMITTED AFTER 14.30 FOR REGULAR WILL BE TREATED AS NEXT DAY APPLICATIONS.<br/><br/>
            ALL DOCUMENTS INCLUDING OIS APPOINTMENT BOOKING SLIP MUST BE PROVIDED OR YOUR APPLICATION WILL NOT BE ACCEPTED.<br/><br/>
            NON-TURKISH CITIZENS MUST HAVE A TURKISH RESIDENCE PERMIT.<br/><br/>
            EVERY DOCUMENT MUST BE PROVIDED WITH 2 COPIES.<br/><br/>
            1. Passport/Travel Document a minimum of 6 months validity.<br/>
            Must have three blank facing pages<br/><br/>
            2. If non-Turkish passport holder please see below for additional notes.<br/><br/>
            3. Copy of the first page of the Passport.<br/><br/>
            4. Two Recent Passport sized photographs with white background.<br/><br/>
            5. Complete application form online at https://visa.immigration.gov.ng/<br/>
            Once completed this must be printed out, signed and dated by applicant.<br/><br/>
            6. Payment and acknowledgement slips available once online payment is complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus<br/><br/>
            7. Certificate of Incorporation of the Host Company in Nigeria.<br/><br/>
            8. A letter of invitation from Host Company in Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company.<br/><br/>
            9. Copy of passport of the signatory who signed the invitation letter. Proof of Nigerian residence permit, if the person writing the invitation is not a Nigerian citizen.<br/><br/>
            10. Income Tax Clearance Certificate of the Nigerian Company, for the last 3 years.<br/><br/>
            11. Please provide your company documentation: <br/>
            Chamber of Commerce registration, most recent tax certificate, signature circular, trade gazette (photocopy)<br/><br/>
            12. Evidence of sufficient funds without recourse to public funds.<br/><br/>
            13. A letter from your employer stating your position, the reason for your visit and a confirmation of who is meeting the costs of your visits. <br/><br/>
            14. SSK Registration Documents<br/><br/>
            15. Evidence of the air ticket and returned ticket.<br/><br/>
            16. Evidence of hotel reservation/ host address in Nigeria.<br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'F4A Business Single Entry Visa.docx',
        ]);
    }
}
