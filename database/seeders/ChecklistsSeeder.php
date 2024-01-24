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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            'office_id' => 3,
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
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. Letter from the principal immigrant  (2 Copies  <br/><br/>
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
            'office_id' => 3,
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
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. Letter from the principal immigrant  (2 Copies  <br/><br/>
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
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'UN',
            'title' => 'Employment Visa- Dependant (Minor) of INGO Staff – R5C',
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
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. Letter from the principal immigrant  (2 Copies  <br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R5C Employment Visa- Dependant (Minor) of INGO Staff.doc',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'UN',
            'title' => 'Employment Visa- Dependant (18years&above) of INGO Staff – R5D',
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
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. Letter from the principal immigrant  (2 Copies  <br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R5D Employment Visa- Dependant (18years&above) of INGO Staff.doc',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'UN',
            'title' => 'Employment Visa- Dependant (Aged Parents- 65 years&above)) of INGO Staff – R5E',
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
            5. Payment and acknowledgement slips available once online payment is complete – Printed from https://visa.immigration.gov.ng/  (2 Copies)<br/><br/>
            6. A letter of invitation from Nigeria. This must be addressed to the Nigerian Embassy Ankara. It must be on letter headed paper stating the address of the company, the reason for the visit and must be signed and dated by the inviter. (2 Copies)<br/><br/>
            7. Copy of passport or National Identity Card of the signatory who signed the invitation letter.<br/><br/>
            8. Letter from the principal immigrant  (2 Copies  <br/><br/>
            IMPORTANT INFORMATION<br/><br/>
            PROCESSING TIME;<br/>
            10 working days minimum<br/><br/>
            DOCUMENTS NOT IN ENGLISH MUST BE SUBMITTED WITH A CERTIFIED TRANSLATED COPY<br/><br/>
            ALL LETTERS MUST BE SIGNED AND DATED<br/><br/>
            NON-TURKISH PASSPORT HOLDER – MUST PROVIDE LEGAL RESIDENCE (Resident Visa/Permit).<br/><br/>
            Must provide copy of Airline ticket or Flight Itinerary<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION PLEASE VISIT OUR WEBSITE OISSERVICES.COM',
            'file_name' => 'R5E Employment Visa- Dependant (Aged Parents- 65 years&above)) of INGO Staff.doc',
        ]);
        Checklist::create([
            'office_id' => 3,
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
            'office_id' => 3,
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
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Business Multiple Entry Visa – F4B',
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
            'file_name' => 'F4B Business Multiple Entry Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Business Frequently Travelled Executives Visa – F4C',
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
            'file_name' => 'F4C Business Frequently Travelled Executives Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Tourism Visa – F5A',
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
            'file_name' => 'F5A Tourism Checklist Ankara.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Visiting Visa (Single Entry) – F6A',
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
            'file_name' => 'F6A Visiting Visa (Single Entry).docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Visiting Visa (Multiple Entry) – F6B',
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
            'file_name' => 'F6B Visiting Visa (Multiple Entry).docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Journalist Visa – F7A',
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
            'file_name' => 'F7A Journalist Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Cleric Visa – F7B',
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
            'file_name' => 'F7B Cleric Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Medical Tourism – F7C',
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
            'file_name' => 'F7C Medical Tourism.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Religious Tourism – F7D',
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
            'file_name' => 'F7D Religious Tourism.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Sports Visa – F7E',
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
            'file_name' => 'F7E Sports Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Artist, Entertainer, Musician Visa – F7F',
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
            'file_name' => 'F7F Artist, Entertainer, Musician Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Study Tour Visa – F7G',
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
            'file_name' => 'F7G Study Tour Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Academic Exchange Programme Visa  (AEP) – R8A',
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
            'file_name' => 'F7H Academic Exchange Programme Visa (AEP).docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Humanitarian Services Visa – F7J',
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
            'file_name' => 'F7J Humanitarian Services Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Emergency/Relief Work Visa – F7K',
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
            'file_name' => 'F7K Emergency, Relief Work Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Staff of INGO Visa – F7L',
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
            'file_name' => 'F7L Staff of INGO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Staff of NGO Visa – F7M',
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
            'file_name' => 'F7M Staff of NGO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Temporary Work Permit Visa – F8A',
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
            'file_name' => 'F8A Temporary Work Permit Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'International Cultural Exchange Visa  - F7I',
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
            'file_name' => 'F71 International Cultural Exchange Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 3,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa (Expatriate) – R2A',
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
            'file_name' => 'R2A Employment Visa (Expatriate).docx',
        ]);
    }
}
