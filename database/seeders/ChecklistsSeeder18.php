<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Checklist;

class ChecklistsSeeder18 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checklist::create([
            'office_id' => 18,
            'visa_type' => 'Fees',
            'title' => 'New Delhi Center Fees',
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
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'R1A – ACCREDITED DIPLOMAT VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>


            REGUEST LETTER:<br/>
            Request letter from the ministry of foreign affairs in Nigeria.
            ',
            'file_name' => 'ACCREDITED DIPLOMAT VISA R1A.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'R1D – DEPENDANT (18 & ABOVE) OF ACCREDITED DIPLOMAT VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            REGUEST LETTER:<br/>
            Request letter from the ministry of foreign affairs in Nigeria.
            ',
            'file_name' => 'DEPENDANT (18 & ABOVE) OF ACCREDITED DIPLOMAT VISA R1D.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'R1E – DEPENDANT (AGED PARENTS – 65 & ABOVE) OF ACCREDITED DIPLOMAT VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            REGUEST LETTER:<br/>
            Request letter from the ministry of foreign affairs in Nigeria
            .',
            'file_name' => 'DEPENDANT (AGED PARENTS - 65 ABOVE) OF ACCREDITED DIPLOMAT VISA R1E.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'R1C – DEPENDANT (MONIR) OF ACCREDITED DIPLOMAT VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            REGUEST LETTER:<br/>
            Request letter from the ministry of foreign affairs in Nigeria
            .',
            'file_name' => 'DEPENDANT MINOR OF ACCREDITED DIPLOMAT VISA R1C.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'F2A – DIPLOMATIC (NON-ACCREDITED) VISA',
            'description' => 'ELIGIBILITY: This Visa is issued to staff of Non-Accredited Diplomats for the purpose of official business visit to Nigeria. <br/><br/>

            REQUIREMENTS:<br/><br/>

            1. ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            2. PASSPORT PHOTO:<br/>
            Two recent passport-sized photographs, taken no more than 1 Month before submission, with the applicant\'s full name written on the back. (Photographs older than 1 month are not acceptable)<br/><br/>

            3. ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            4. PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            5. INVITATION LETTER (NOTE VERBAL:<br/>
            A letter of invitation from the Ministry of foreign affairs. This must be addressed to the Nigerian High Commission in New Delhi.
            ',
            'file_name' => 'NON ACREDITED DIPLOMAT VISA F2A.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Diplomatic',
            'title' => 'R1B – ACCREDITED DIPLOMAT VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            REGUEST LETTER:<br/>
            Request letter from the ministry of foreign affairs in Nigeria.
            ',
            'file_name' => 'SPOUSE OF ACCREDITED DIPLOMAT VISA R1B.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Official',
            'title' => 'R4D – DEPENDANT OF EXPATRIATE (18 & ABOVE) VISA – (GOVT. OFFICIAL)',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            REQUEST LETTER:<br/>
            Request letter from the governments.
            ',
            'file_name' => 'DEPENDANT OF EXPATRIATE (18 & ABOVE) (GOVERNMENT OFFICIAL) VISA R4D.docx',
        ]);
        Checklist::create([
          'office_id' => 17,
          'visa_type' => 'Official',
          'title' => 'R4E – DEPENDANT OF EXPATRIATE (AGEND PARENT 65 & ABOVE) VISA – (GOVT. OFFICIAL)',
          'description' => 'ORIGINAL PASSPORT:<br/>
          Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          ONLINE VISA APPLICATION FORM:<br/>
          Complete the visa application form online at visa.immigration.gov.ng
          Once completed, must be printed out, signed, and dated by the applicant.
          A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          REQUEST LETTER:<br/>
          Request letter from the governments.
          ',
          'file_name' => 'DEPENDANT OF EXPATRIATE (AGED PARENTS 65 & ABOVE) (GOVERNMENT OFFICIAL) VISA R4E.docx',
        ]);
        Checklist::create([
          'office_id' => 17,
          'visa_type' => 'Official',
          'title' => 'R4C – DEPENDANT OF EXPATRIATE MINOR VISA – (GOVT. OFFICIAL)',
          'description' => 'ORIGINAL PASSPORT:<br/>
          Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          ONLINE VISA APPLICATION FORM:<br/>
          Complete the visa application form online at visa.immigration.gov.ng
          Once completed, must be printed out, signed, and dated by the applicant.
          A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          REQUEST LETTER:<br/>
          Request letter from the governments.
          ',
          'file_name' => 'DEPENDANT OF EXPATRIATE MINOR (GOVERNMENT OFFICIAL) VISA R4C.docx',
        ]);
        Checklist::create([
          'office_id' => 17,
          'visa_type' => 'Official',
          'title' => 'R4A – EMPLOYMENT VISA – EXPATRIATE (GOVT. OFFICIAL)',
          'description' => 'ORIGINAL PASSPORT:<br/>
          Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          ONLINE VISA APPLICATION FORM:<br/>
          Complete the visa application form online at visa.immigration.gov.ng
          Once completed, must be printed out, signed, and dated by the applicant.
          A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          EMPLOYMENT LETTER:<br/>
          Letter of employment from the government.<br/><br/>

          OFFER AND ACCEPTANCE LETTER:<br/>
          Offer and acceptance Letter. This must be signed and dated.
          ',
          'file_name' => 'EMPLOYMENT VISA - EXPATRIATE (GOVERNMENT OFFICIAL) VISA R4A .docx',
        ]);
        Checklist::create([
          'office_id' => 17,
          'visa_type' => 'Official',
          'title' => 'R4B – SPOUSE OF EXPATRIATE VISA – (GOVT. OFFICIAL)',
          'description' => 'ORIGINAL PASSPORT:<br/>
          Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          ONLINE VISA APPLICATION FORM:<br/>
          Complete the visa application form online at visa.immigration.gov.ng
          Once completed, must be printed out, signed, and dated by the applicant.
          A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

          PASSPORT DATA PAGE:<br/>
          Copy of Passport Data-Page<br/><br/>

          REQUEST LETTER:<br/>
          Request letter from the governments.
          ',
          'file_name' => 'SPOUSE OF EXPATRIATE (GOVERNMENT OFFICIAL) VISA R4B.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'UN',
            'title' => 'R5D – DEPENDANT (18 & ABOVE) EMPLOYMENT VISA - INGO',
            'description' => 'REQUIREMENTS:<br/><br/>

            1.ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            2.PASSPORT PHOTO:<br/>
            Two recent passport-sized photographs, taken no more than 1 Month before submission, with the applicant\'s full name written on the back. (Photographs older than 1 month are not acceptable)<br/><br/>

            3.ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            4.PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            INVITATION LETTER:<br/>
            A letter of invitation from the INGO in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the INGO, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.<br/><br/>

            BANK DEMAND DRAFT:<br/>
            Rs.500/-Embassy Service fees should be in Demand Draft in favor of "HIGH COMMISSION OF FEDERAL REPUBLIC OF NIGERIA" PAYABLE AT NEW DELHI.
            To be purchased from the BANK before submission.
            ',
            'file_name' => 'EMPLOYMENT VISA - (18 & ABOVE) OF INGO STAFF R5D.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'UN',
            'title' => 'R5E– DEPENDANT (AGED PARENT 65 & ABOVE) EMPLOYMENT VISA - INGO',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            INVITATION LETTER:<br/>
            A letter of invitation from the INGO in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the INGO, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay
            .
            ',
            'file_name' => 'EMPLOYMENT VISA - (AGED PARENTD 65 & ABOVE) OF INGO STAFF R5E.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'UN',
            'title' => 'R5A – EMPLOYMENT VISA - INGO',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            MEMORANDUM OF UNDERSTANDING:<br/>
            Provide the MOU from the Nigeria National Planning and appropriate security clearance for (Special Security Cases).<br/><br/>

            INVITATION LETTER:<br/>
            A letter of invitation from the INGO in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the INGO, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.
            ',
            'file_name' => 'EMPLOYMENT VISA - INGO R5A.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'UN',
            'title' => 'R5C – MINOR EMPLOYMENT VISA - INGO',
            'description' => 'REQUIREMENTS:<br/><br/>

            1.ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            2.PASSPORT PHOTO:<br/>
            Two recent passport-sized photographs, taken no more than 1 Month before submission, with the applicant\'s full name written on the back. (Photographs older than 1 month are not acceptable)<br/><br/>

            3.ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            4.PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            INVITATION LETTER:<br/>
            A letter of invitation from the INGO in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the INGO, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.
            ',
            'file_name' => 'EMPLOYMENT VISA - MINOR OF INGO STAFF R5C.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'UN',
            'title' => 'R5B – SPOUSE EMPLOYMENT VISA - INGO',
            'description' => 'REQUIREMENTS:<br/><br/>

            1.ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            2.PASSPORT PHOTO:<br/>
            Two recent passport-sized photographs, taken no more than 1 Month before submission, with the applicant\'s full name written on the back. (Photographs older than 1 month are not acceptable)<br/><br/>

            3.ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            4.PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            INVITATION LETTER:<br/>
            A letter of invitation from the INGO in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the INGO, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.
            ',
            'file_name' => 'EMPLOYMENT VISA - SPOUSE OF INGO STAFF R5B.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Standard',
            'title' => 'F7H – ACADEMIC EXCHANGE PROGRAMME VISA',
            'description' => 'This is a single entry Visa issued to those who  wish to visit Nigeria for the purpose of Academic Exchange Programme.<br/><br/>

            ELIGIBILITY: Students/Scholars/Lecturers<br/><br/>

            REQUIREMENTS:<br/><br/>

            1.ORIGINAL PASSPORT:<br/>
            Passport/Travel Document with a minimum of 6 months validity. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            2.PASSPORT PHOTO:<br/>
            Two recent passport-sized photographs, taken no more than 1 Month before submission, with the applicant\'s full name written on the back. (Photographs older than 1 month are not acceptable)<br/><br/>

            3.ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            4.PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            5. INVITATION LETTER:<br/>
            A letter of invitation from the Host Institution in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the institution, The reason for the visit must be stated and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.<br/><br/>

            6. LETTER OF NOC FROM THE CURRENT INSTITUTION IN INDIA:<br/>
            A letter from your institution in India. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the institution, Reason for the visit must be stated, and The letter must be signed and dated by the relevant department head of the institution. This cannot be signed by the applicant.<br/><br/>

            7. FLIGHT RETURN TICKETS:<br/>
            A copy of your flight return tickets.<br/><br/>

            8. ACCOMMODATION:<br/>
            Evidence of accommodation in Nigeria, copies of the confirmed hotel, guest house, or motel booking with the name of the applicants showing.<br/><br/>

            9. BANK DEMAND DRAFT:<br/>
            Rs.500/-Embassy Service fees should be in Demand Draft in favor of "HIGH COMMISSION OF FEDERAL REPUBLIC OF NIGERIA" PAYABLE AT NEW DELHI.
            To be purchased from the BANK before submission.<br/><br/>

            MUST READ IMPORTANT INFORMATION:<br/><br/>

            	Processing Time:- Minimum of 7 working days. <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided or your application will not be accepted.<br/>
            	Documents NOT in English must be submitted with a certified translated copy.<br/>
            	All Documents and letters must be formal. They should be typed, printed in portrait, addressed to the Nigerian High Commission New Delhi, signed and dated.<br/>
            	Non-Indian passport holders must submit a copy of their valid Indian multiple entry residence permit.<br/><br/>

            Please check our opening hours to avoid delays and for any additional information please email us @infodelhi@oisservices.com
            ',
            'file_name' => 'ACADEMIC EXCHANGE PROGRAMME F7H.docx',
        ]);
        Checklist::create([
            'office_id' => 17,
            'visa_type' => 'Standard',
            'title' => 'R8A– ACADEMIC EXCHANGE PROGRAMME VISA',
            'description' => 'ORIGINAL PASSPORT:<br/>
            Passport should be valid for a minimum of 2 years or the duration of the exchange programme. Must have two blank facing pages If non-Indian passport holder please see the below IMPORTANT INFORMATION section.<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            ONLINE VISA APPLICATION FORM:<br/>
            Complete the visa application form online at visa.immigration.gov.ng
            Once completed, must be printed out, signed, and dated by the applicant.
            A copy of the Acknowledgment slip must be – Printed from https://portal.immigration.gov.ng/<br/><br/>

            PASSPORT DATA PAGE:<br/>
            Copy of Passport Data-Page<br/><br/>

            MEMORANDOM OF UNDERSTANDING:<br/>
            MOU with the relevant MDA and Institution.<br/><br/>

            R8A VISA REQUEST LETTER:<br/>
            A request letter from the institution in Nigeria. This must be addressed to the Nigerian High Commission in New Delhi. It must be on letter headed paper stating the address of the institution, and accepting full immigration and financial responsibility on behalf of the student for the duration of his/her stay.<br/><br/>

            BANK DEMAND DRAFT:<br/>
            Rs.500/-Embassy Service fees should be in Demand Draft in favor of "HIGH COMMISSION OF FEDERAL REPUBLIC OF NIGERIA" PAYABLE AT NEW DELHI.
            To be purchased from the BANK before submission.<br/><br/>

            MUST READ IMPORTANT INFORMATION:<br/><br/>

            	Processing Time:- Minimum of 7 working days. <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided or your application will not be accepted.<br/>
            	Documents NOT in English must be submitted with a certified translated copy.<br/>
            	All Documents and letters must be formal. They should be typed, printed in portrait, addressed to the Nigerian High Commission New Delhi, signed and dated.<br/>
            	Non-Indian passport holders must submit a copy of their valid Indian multiple entry residence permit.<br/><br/>

            Please check our opening hours to avoid delays and for any additional information please email us @infodelhi@oisservices.com
            ',
            'file_name' => 'ACADEMIC EXCHANGE PROGRAMME VISA - R8A.docx',
        ]);
    }
}
