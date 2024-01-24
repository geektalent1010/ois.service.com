<?php

namespace Database\Seeders;

use App\Checklist;
use Illuminate\Database\Seeder;

class ChecklistsSeeder12 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Non-Accredited Diplomatic Visa – F2A',
            'description' => 'F2A - Non-accredited Diplomatic visa is a single-entry short visit visa for non-accredited diplomats or temporary work diplomats who wish to enter Nigeria for official business. Permitted activities for this visa type are: attendance of meetings, conference and seminars. <br/><br/>

            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	NOTE VERBAL FROM INVITER: Provide detailed NOTE VERBAL from Nigeria. The Note verbal must state the official position of applicant in the Embassy/Ministry of Foreign Affairs. Must be stamped and signed.	 <br/><br/>
            8	NOTE VERBAL FROM EMPLOYER: Provide detailed NOTE VERBAL from your employer. The Note verbal must state the official position of applicant in the Embassy/Ministry of Foreign Affairs.  Must be stamped and signed.	<br/><br/>
            9	STAFF ID CARD: Provide a copy of applicant staff ID Card (front and back). This must be printed out. Show original at sight.	<br/><br/>
            10	Flight Reservation	 <br/><br/>
            11	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '42- F2A - Non-Accredited Diplomatic Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Accredited Diplomatic Visa – R1A',
            'description' => 'R1A – Accredited Diplomatic Visa is issued to accredited Diplomats to Nigeria. Eligibility for this visa type are accredited diplomats. This visa type grants applicant a diplomatic work permit of 2 years (renewable). Permitted activities are diplomatic activities  work in Nigeria as accredited diplomat.<br/><br/>

            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER FROM NIGERIA’S MINISTRY OF FOREIGN AFFAIRS: Provide a letter from Nigeria’s Ministry of Foreign Affairs.	<br/><br/>
            8	NOTE VERBAL FROM INVITER: Provide detailed NOTE VERBAL from Nigeria. The Note verbal must state the official position of applicant in the Embassy/Ministry of Foreign Affairs. Must be stamped and signed.	<br/><br/> 
            9	NOTE VERBAL FROM EMPLOYER: Provide detailed NOTE VERBAL from your employer. The Note verbal must state the official position of applicant in the Embassy/Ministry of Foreign Affairs.  Must be stamped and signed.	<br/><br/>
            10	STAFF ID CARD: Provide a copy of applicant staff ID Card (front and back). This must be printed out. Show original at sight.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '43- R1A - Accredited Diplomatic Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Spouse of Accredited Diplomat Visa – R1B',
            'description' => 'R1B – Spouse of Accredited Diplomat Visa is issued to spouse of accredited Diplomats to Nigeria. Eligibility for this visa type is for spouse of accredited diplomat. This visa type is a diplomatic residence permit that is subject to the validity of the principal.<br/><br/>

            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER FROM NIGERIA’S MINISTRY OF FOREIGN AFFAIRS: Provide a letter from Nigeria’s Ministry of Foreign Affairs.	<br/><br/>
            8	NOTE VERBAL FROM ACCREDITED DIPLOMAT’S INVITER: Provide detailed NOTE VERBAL from Nigeria inviting spouse of Accredited Diplomat. Must be stamped and signed.	 <br/><br/>
            9	NOTE VERBAL FROM ACCREDITED DIPLOMAT’S EMPLOYER: Provide detailed NOTE VERBAL from Accredited Diplomat’s employer inviting spouse of Accredited Diplomat.  Must be stamped and signed.	<br/><br/>
            10	SPOUSE VALID DIPLOMATIC PASSPORT DATAPAGE: A clear copy of Accredited Diplomat’s (i.e. Spouse) Valid Diplomatic Passport Data page.<br/><br/>	
            11	SPOUSE DIPLOMATIC WORK PERMIT: A clear copy of Accredited Diplomat’s (i.e. Spouse)  Diplomatic Work Permit.	<br/><br/>
            12	MARRIAGE CERTIFICATE: Copy of the marriage certificate.	<br/><br/>
            13	Flight Reservation	 <br/><br/>
            14	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '44- R1B - Spouse of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Minor) of Accredited Diplomat Visa – R1C',
            'description' => 'R1C – Dependant (Minor) of Accredited Diplomat Visa to Nigeria is issued to dependants of accredited Diplomats who are less than 18 years of age. This visa type is a diplomatic residence permit that is subject to the validity of the principal.<br/><br/>

            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	<br/><br/> 
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER FROM NIGERIA’S MINISTRY OF FOREIGN AFFAIRS: Provide a letter from Nigeria’s Ministry of Foreign Affairs.	<br/><br/>
            8	NOTE VERBAL FROM ACCREDITED PARENT’S INVITER: Provide detailed NOTE VERBAL from Nigeria inviting applicant as a dependant (minor) accompanying Accredited Diplomat. Must be stamped and signed.	<br/><br/> 
            9	NOTE VERBAL FROM ACCREDITED PARENT’S EMPLOYER: Provide detailed NOTE VERBAL from Accredited Parent’s employer inviting applicant as a dependant (minor) accompanying Accredited Diplomat.  Must be stamped and signed.	<br/><br/>
            10	ACCREDITED PARENT’S VALID DIPLOMATIC PASSPORT DATAPAGE: A clear copy of Accredited Parent’s Valid Diplomatic Passport Data page.	<br/><br/>
            11	ACCREDITED PARENT’S DIPLOMATIC WORK PERMIT: A clear copy of Accredited Parent’s Diplomatic Work Permit.	<br/><br/>
            12	BIRTH CERTIFICATE: Copy of the original birth certificate showing accredited diplomatic parent/s name(s).	<br/><br/>
            13	Flight Reservation	 <br/><br/>
            14	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '45- R1C - Dependant (Minor) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (18 years & above) of Accredited Diplomat Visa – R1D',
            'description' => 'R1D – Dependant (18 years & above) of Accredited Diplomat Visa to Nigeria is issued to dependants of accredited Diplomats who are 18 years and above. This visa type is a diplomatic residence permit that is subject to the validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	<br/><br/> 
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER FROM NIGERIA’S MINISTRY OF FOREIGN AFFAIRS: Provide a letter from Nigeria’s Ministry of Foreign Affairs.	<br/><br/>
            8	NOTE VERBAL FROM ACCREDITED PARENT’S INVITER: Provide detailed NOTE VERBAL from Nigeria inviting applicant as a dependant (18 years and above) accompanying Accredited Diplomat. Must be stamped and signed.<br/><br/>	 
            9	NOTE VERBAL FROM ACCREDITED PARENT’S EMPLOYER: Provide detailed NOTE VERBAL from Accredited Parent’s employer inviting applicant as a dependant (18 years and above) accompanying Accredited Diplomat.  Must be stamped and signed.	<br/><br/>
            10	ACCREDITED PARENT’S VALID DIPLOMATIC PASSPORT DATAPAGE: A clear copy of Accredited Parent’s Valid Diplomatic Passport Data page.	<br/><br/>
            11	ACCREDITED PARENT’S DIPLOMATIC WORK PERMIT: A clear copy of Accredited Parent’s Diplomatic Work Permit.	<br/><br/>
            12	BIRTH CERTIFICATE: Copy of the original birth certificate showing accredited diplomatic parent/s name(s).	<br/><br/>
            13	Flight Reservation	 <br/><br/>
            14	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '46- R1D - Dependant (18 years and above) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Aged Parents - 65 years & above) of Accredited Diplomat Visa – R1E',
            'description' => 'R1E – Dependant (Aged Parents – 65 years & above) of Accredited Diplomat Visa to Nigeria is issued to aged parents of accredited Diplomats who are 65 years and above. Each case is treated on its merit. This visa type is a diplomatic residence permit that is subject to the validity of the principal.	<br/><br/>

            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Diplomatic Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid diplomatic passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER FROM NIGERIA’S MINISTRY OF FOREIGN AFFAIRS: Provide a letter from Nigeria’s Ministry of Foreign Affairs.	<br/><br/>
            8	NOTE VERBAL FROM ACCREDITED DIPLOMAT’S INVITER: Provide detailed NOTE VERBAL from Nigeria inviting Aged Parents of Accredited Diplomat. Must be stamped and signed.	 <br/><br/>
            9	NOTE VERBAL FROM ACCREDITED DIPLOMAT’S EMPLOYER: Provide detailed NOTE VERBAL from Accredited Diplomat’s employer inviting Aged Parents of Accredited Diplomat.  Must be stamped and signed.	<br/><br/>
            10	ACCREDITED DIPLOMAT’S DIPLOMATIC PASSPORT DATAPAGE: A clear copy of Accredited Diplomat’s (i.e. Child of Aged Parents) Valid Diplomatic Passport Data page.	<br/><br/>
            11	ACCREDITED DIPLOMAT’S DIPLOMATIC WORK PERMIT: A clear copy of Accredited Diplomat’s (i.e. Child of Aged Parents)  Diplomatic Work Permit.	<br/><br/>
            12	ACCREDITED DIPLOMAT’S BIRTH CERTIFICATE: Copy of the Accredited Diplomat’s original birth certificate showing aged parent/s name(s).	<br/><br/>
            13	Flight Reservation	 <br/><br/>
            14	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            
            
            IMPORTANT INFORMATION (if applicable) <br/><br/>
            •	ONLY APPLICANT APPLYING FOR VISA ARE ALLOWED INSIDE THE OFFICE<br/><br/>
            
            •	APPLICANTS APPLICATION WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQIUERMENTS GIVEN IN THE VISA CHECKLIST <br/><br/>
            
            Please check our opening hours to avoid delays and for any additional information please call us on +31708915324 email us at infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '47- R1E - Dependant (Aged Parents - 65 years and above) of Accredited Diplomat Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Official',
            'title' => 'Employment Expatriate (Government Official) Visa – R4A',
            'description' => 'R4A – Employment Expatriate (Government Official) Visa is issued to EXPATRIATES who wish to obtain employment with Government as Government Official in Nigeria. Eligibility for this visa type are for expatriates wishing to work as Government Officials in Nigeria.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Official Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid Official passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER OF REQUEST/SUPPORT FOR VISA: A Typed Letter of request from the Secretary of State Government (i.e. competent personnel/person) signed by authorized signatory addressed to the Nigeria Ambassador, attention of immigration desk Nigeria Embassy The Hague, requesting the R4A Employment Visa for the applicant. This Letter must contain the applicant`s full name and must state that the government takes full immigration responsibilities for the applicant. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            8	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            9	OFFER OF EMPLOYMENT: An offer of employment from the government.	<br/><br/> 
            10	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            11	APPLICANT’S CV: A full copy of the applicants most recent CV.<br/><br/> 	
            12	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '48- R4A - Employment Expatriate (Government Official) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Official',
            'title' => 'Spouse of Employed Expatriate (Government Official) Visa – R4B',
            'description' => 'R4B – Spouse of Employed Expatriate (Government Official) Visa is issued to Spouse of EXPATRIATES employed by Government as Government Official in Nigeria. Eligibility for this visa type is for spouse accompanying Expatriates employed by Government in Nigeria. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Official Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid Official passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER OF REQUEST/SUPPORT FOR VISA: A Typed Letter of request from the Secretary of State Government (i.e. competent personnel/person) signed by authorized signatory addressed to the Nigeria Ambassador, attention of immigration desk Nigeria Embassy The Hague, requesting the R4A Employment Visa for the applicant. This Letter must contain the applicant`s full name and must state that the government takes full immigration responsibilities for the applicant. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            8	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            9	OFFER OF EMPLOYMENT: An offer of employment from the government.	<br/><br/> 
            10	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            11	APPLICANT’S CV: A full copy of the applicants most recent CV.<br/><br/> 	
            12	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '49- R4B - Spouse of GO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Official',
            'title' => 'Dependant (Minor) of Employed Expatriate (Government Official) Visa – R4C',
            'description' => 'R4C – Dependants (Minor) of Employed Expatriate (Government Official) Visa is issued to dependants of EXPATRIATES employed by Government, who are less than 18 years of age. Eligibility for this visa type is for dependants (less than 18 years) accompanying Expatriates employed by Government in Nigeria. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Official Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid Official passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER OF REQUEST/SUPPORT FOR VISA: A Typed Letter of request from the Secretary of State Government (i.e. competent personnel/person) signed by authorized signatory addressed to the Nigeria Ambassador, attention of immigration desk Nigeria Embassy The Hague, requesting the R4A Employment Visa for the applicant. This Letter must contain the applicant`s full name and must state that the government takes full immigration responsibilities for the applicant. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            8	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            9	OFFER OF EMPLOYMENT: An offer of employment from the government.	<br/><br/> 
            10	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            11	APPLICANT’S CV: A full copy of the applicants most recent CV.<br/><br/> 	
            12	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '50- R4C - Dependant of GO (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Official',
            'title' => 'Dependant (18 Years and above) of Employed Expatriate (Government Official) Visa – R4D',
            'description' => 'R4D – Dependants of Employed Expatriate (Government Official) Visa is issued to dependants of EXPATRIATES employed by Government, who are 18 years and above. Eligibility for this visa type is for dependants (18 years and above) accompanying Expatriates employed by Government in Nigeria. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Official Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid Official passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER OF REQUEST/SUPPORT FOR VISA: A Typed Letter of request from the Secretary of State Government (i.e. competent personnel/person) signed by authorized signatory addressed to the Nigeria Ambassador, attention of immigration desk Nigeria Embassy The Hague, requesting the R4A Employment Visa for the applicant. This Letter must contain the applicant`s full name and must state that the government takes full immigration responsibilities for the applicant. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            8	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            9	OFFER OF EMPLOYMENT: An offer of employment from the government.	<br/><br/> 
            10	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            11	APPLICANT’S CV: A full copy of the applicants most recent CV.<br/><br/> 	
            12	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '51- R4D - Dependant of GO (18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Official',
            'title' => 'Dependant (Aged Parents - 65 Years and above) of Employed Expatriate (Government Official) Visa – R4E',
            'description' => 'R4E – Dependants of Employed Expatriate (Government Official) Visa is issued to aged parents of EXPATRIATES employed by Government, who are 65 years and above. Eligibility for this visa type is for aged parents (65 years and above) accompanying Expatriates employed by Government in Nigeria. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Official Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid Official passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	LETTER OF REQUEST/SUPPORT FOR VISA: A Typed Letter of request from the Secretary of State Government (i.e. competent personnel/person) signed by authorized signatory addressed to the Nigeria Ambassador, attention of immigration desk Nigeria Embassy The Hague, requesting the R4A Employment Visa for the applicant. This Letter must contain the applicant`s full name and must state that the government takes full immigration responsibilities for the applicant. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            8	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            9	OFFER OF EMPLOYMENT: An offer of employment from the government.	<br/><br/> 
            10	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            11	APPLICANT’S CV: A full copy of the applicants most recent CV.<br/><br/> 	
            12	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            11	Flight Reservation	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '52- R4E - Dependant of GO (Aged Parents - 65 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'UN',
            'title' => 'Employment Visa (INGO) – R5A',
            'description' => 'R5A – Employment Visa (INGO) is issued to EXPATRIATES who wish to obtain employment with International Non-Governmental Organisations operating in Nigeria. Eligibility for this visa type are for INGO workers.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  UN (United Nations) Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	<br/><br/> 
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid UN Passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	MEMORANDUM OF UNDERSTANDING (MoU): Provide Memorandum of Understanding (MoU) with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases).	<br/><br/>
            8	FORMAL APPLICATION BY EMPLOYER: Formal typed application for R5A Visa by the Employer accepting Immigration Responsibility. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            9	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            10	OFFER OF EMPLOYMENT: An offer of employment from the government.<br/><br/>	 
            11	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            12	COPY OF INGO REGISTRATION: A copy of registration of INGO.	<br/><br/>
            13	APPLICANT’S CV: A full copy of the applicants most recent CV. <br/><br/>
            14	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            15	Flight Reservation	 <br/><br/>
            16	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '53- R5A - Employment Visa - INGO.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'UN',
            'title' => 'Employment Visa - Spouse of INGO Staff – R5B',
            'description' => 'R5B – Employment Visa – Spouse of INGO staff is issued to Spouse of INGO staff. Eligibility for this visa type is for spouse accompanying INGO staff. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  UN (United Nations) Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	<br/><br/> 
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid UN Passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	MEMORANDUM OF UNDERSTANDING (MoU): Provide Memorandum of Understanding (MoU) with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases).	<br/><br/>
            8	FORMAL APPLICATION BY EMPLOYER: Formal typed application for R5A Visa by the Employer accepting Immigration Responsibility. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            9	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            10	OFFER OF EMPLOYMENT: An offer of employment from the government.<br/><br/>	 
            11	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            12	COPY OF INGO REGISTRATION: A copy of registration of INGO.	<br/><br/>
            13	APPLICANT’S CV: A full copy of the applicants most recent CV. <br/><br/>
            14	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            15	Flight Reservation	 <br/><br/>
            16	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '54- R5B - Spouse of INGO Staff Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'UN',
            'title' => 'Employment Visa  – Dependant (Minor) of INGO Staff – R5C',
            'description' => 'R5C – Employment Visa – Dependant (Minor) of INGO Staff is a visa issued to dependants of INGO Staff, who are less than 18 years of age. Eligibility for this visa type is for dependants (less than 18 years) accompanying INGO staff. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  UN (United Nations) Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	<br/><br/> 
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid UN Passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	MEMORANDUM OF UNDERSTANDING (MoU): Provide Memorandum of Understanding (MoU) with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases).	<br/><br/>
            8	FORMAL APPLICATION BY EMPLOYER: Formal typed application for R5A Visa by the Employer accepting Immigration Responsibility. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            9	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            10	OFFER OF EMPLOYMENT: An offer of employment from the government.<br/><br/>	 
            11	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            12	COPY OF INGO REGISTRATION: A copy of registration of INGO.	<br/><br/>
            13	APPLICANT’S CV: A full copy of the applicants most recent CV. <br/><br/>
            14	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            15	Flight Reservation	 <br/><br/>
            16	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '55- R5C - Dependant of INGO Staff (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Dependant (18 Years and above) of INGO Staff – R5D',
            'description' => 'R5D – Employment Visa – Dependant of INGO Staff is a visa issued to dependants of INGO Staff, who are 18 years and above. Eligibility for this visa type is for dependants (18 years and above) accompanying INGO staff. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  UN (United Nations) Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	<br/><br/> 
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid UN Passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	MEMORANDUM OF UNDERSTANDING (MoU): Provide Memorandum of Understanding (MoU) with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases).	<br/><br/>
            8	FORMAL APPLICATION BY EMPLOYER: Formal typed application for R5A Visa by the Employer accepting Immigration Responsibility. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            9	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            10	OFFER OF EMPLOYMENT: An offer of employment from the government.<br/><br/>	 
            11	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            12	COPY OF INGO REGISTRATION: A copy of registration of INGO.	<br/><br/>
            13	APPLICANT’S CV: A full copy of the applicants most recent CV. <br/><br/>
            14	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            15	Flight Reservation	 <br/><br/>
            16	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '56- R5D - Dependant of INGO Staff (18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'UN',
            'title' => 'Employment Visa - Dependant (Aged Parents - 65 Years and above) of INGO Staff – R5E',
            'description' => 'R5E– Employment Visa – Dependant of INGO Staff is a visa issued to aged parents of INGO Staff, who are 65 years and above. Eligibility for this visa type is for aged parents (65 years and above) accompanying INGO staff. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  UN (United Nations) Passport with a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages.<br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	<br/><br/> 
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.<br/><br/>
            
            6	VALID PASSPORT DATA PAGE: Copy of Applicant valid UN Passport data page.<br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/>
            7	MEMORANDUM OF UNDERSTANDING (MoU): Provide Memorandum of Understanding (MoU) with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases).	<br/><br/>
            8	FORMAL APPLICATION BY EMPLOYER: Formal typed application for R5A Visa by the Employer accepting Immigration Responsibility. Also include a valid copy of requester’s valid passport (authorized signatory) data page.	<br/><br/>
            9	EMPLOYMENT LETTER BY GOVERNMENT: Provide a letter of Employment by the Government.	<br/><br/>
            10	OFFER OF EMPLOYMENT: An offer of employment from the government.<br/><br/>	 
            11	LETTER OF ACCEPTANCE: A typed letter of acceptance from the applicant stating they accept the offer from the government. This must be signed.	<br/><br/>
            12	COPY OF INGO REGISTRATION: A copy of registration of INGO.	<br/><br/>
            13	APPLICANT’S CV: A full copy of the applicants most recent CV. <br/><br/>
            14	COPY OF ORIGINAL QUALIFICATION: Copy of original qualifications/certificate/diploma certified by the Ministry of Foreign Affairs or Ministry of Education of applicant’s country. <br/>
            
            Note: Both the original and the copy must each be certified.	<br/><br/>
            15	Flight Reservation	 <br/><br/>
            16	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/><br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/><br/>
            	Regular Service- 10-21 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '57- R5E - Dependant of INGO Staff (Aged Parents - 65 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Transit Visa – F3B',
            'description' => 'Apply for a transit visa – F3B if you are a passenger with onward ticket to the next destination and wish to enter Nigeria before proceeding on the onward journey. Permitted to enter Nigeria for 1 – 7 days maximum.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '1- F3B - Transit Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Business Visa – F4A',
            'description' => 'Apply for a transit visa – F3B if you are a passenger with onward ticket to the next destination and wish to enter Nigeria before proceeding on the onward journey. Permitted to enter Nigeria for 1 – 7 days maximum.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '2- F4A - Business Single Entry Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Tourism Visa – F5A',
            'description' => 'Apply for a tourist visa only if you are seeking to visit Nigeria for the sake of tourism/holiday purpose. Applicants do not require an invitation.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '3- F5A - Tourism Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Visiting Visa – F6A',
            'description' => 'Apply for a visiting visa only if you are seeking to visit Nigeria for the purpose of social visit to family and friends. Eligibility for visiting visa are for persons with friends and family in Nigeria.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '4- F6A - Visiting (Single Entry) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Journalist Visa – F7A',
            'description' => 'Apply for a journalist visa only if you are a foreign national seeking to enter Nigeria for the purpose of media and journalism only.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '5- F7A - Journalist Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Cleric Visa – F7B',
            'description' => 'Apply for a Cleric Visa if you are a religious officials who wish to visit Nigeria for the purpose of religious services like preaching, religious seminar, religious conference.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '6- F7B - Cleric Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Medical Tourism Visa – F7C',
            'description' => 'Apply for a medical tourism visa if you wish to visit Nigeria for the purpose of receiving medical care. Applicant eligible for medical tourism visa are for persons in need of medical attention or person accompanying medical patient.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '7- F7C - Medical Tourism Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Religious Tourism Visa – F7D',
            'description' => 'Apply for a Religious tourism if you wish to visit Nigeria for the purpose of attending religious activities, programmes or pilgrimages.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '8- F7D - Religious Tourism Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Sports Visa – F7E',
            'description' => 'Apply for a sports visa if you wish to visit Nigeria for the purpose of sporting activities. Eligibility for a sports visa is for sports men/women, officials and organised supporters club.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '9- F7E - Sports Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Artist(e)/Entertainer/Musician Visa – F7F',
            'description' => 'Apply for an Artist(e)/Entertainer/Musician Visa to Nigeria for the purpose of performance as an artist(e), entertainer or musician. Eligibility for this visa type is for performing artist(e)s, entertainers or musicians.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '10- F7F - Artist-Entertainer-Musician Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Study Tour Visa – F7G',
            'description' => 'Apply for a study tour visa to Nigeria for the purpose of study tour. Eligibility for this visa type are students, scholars, or course participants.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '11- F7G - Study Tour Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Academic Exchange Programme (AEP) Visa– F7H',
            'description' => 'Apply for an Academic Exchange Programme (AEP) visa to Nigeria for the purpose of academic exchange programme. Eligibility for this visa type are for students, scholars and lecturers.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '12- F7H - Academic Exchange Programme (AEP) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'International Culture Exchange Visa – F7I',
            'description' => 'Apply for an International Cultural Exchange visa to Nigeria for the purpose of cultural exchange activities. Eligibility for this visa type are for citizens of countries with which Nigeria has Memorandum of Understanding (MoU) on cultural exchange programme.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '13- F7I - International Cultural Exchange Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Humanitarian Services Visa – F7J',
            'description' => 'Apply for a Humanitarian visa to Nigeria for the purpose of humanitarian services. Eligibility for this visa type are humanitarian workers.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '14- F7J - Humanitarian Services Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Emergency/Relief Work Visa – F7K',
            'description' => 'Apply for an Emergency Relief Work visa to Nigeria for the purpose of emergency/relief work. Eligibility for this visa type are emergency and relief workers.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '15- F7K - Emergency-Relief Work Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Staff of INGO Visa – F7L',
            'description' => 'Apply for a Staff of INGO visa to Nigeria for the purpose of International Non-Governmental Organisations (INGO) activities. Eligibility for this visa type is for staff of International Non-Governmental Organisations.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '16- F7L - Staff of INGO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Staff of NGO Visa – F7M',
            'description' => 'Apply for a Staff of NGO visa to Nigeria for the purpose of Non-Governmental Organisations (NGO) activities. Eligibility for this visa type is for staff of Non-Governmental Organisations.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '17- F7M - Staff of NGO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Business Multiple Entry Visa – F4B',
            'description' => 'Apply for a business multiple entry visa only if you are visiting Nigeria for business meeting, conference, seminar, contract negotiation, marketing, sales, procurement of Nigerian goods/services, trade fairs and job interview.
            Applicant should have travelled to Nigeria previously to be eligible for this visa type.
            <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '18- F4B - Business Multiple Entry Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Business – Frequently Travelled Executive Visa – F4C',
            'description' => 'Apply for a business visa only if you are visiting Nigeria for business meeting, conference, seminar, contract negotiation, marketing, sales, procurement of Nigerian goods/services, trade fairs and job interview. Eligibility for F4C visa type is for frequently travelled business persons of international repute with investment up to USD250,000 in Nigeria.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '19- F4C - Business - Frequently Travelled Executives Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Visiting (Multiple Entry) Visa – F6B',
            'description' => 'Apply for a visiting visa only if you are seeking to visit Nigeria for the purpose of social visit to family and friends. Eligibility for visiting (multiple entry) visa – F6B are for citizens of countries who offer similar multiple entry visa to Nigerian citizens. Applicant should have also travelled to Nigeria previously to be eligible for this visa type.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '20- F6B - Visiting (Multiple Entry) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Temporary Work Permit (TWP) Visa – F8A',
            'description' => 'Apply for a TWP visa to Nigeria if you are an expert invited by corporate bodies for short period of time (ranging from 1 day up to 3 months) for: after sales installations, commission, upgrading, maintenance, repairs of equipment and machinery, providing trainings, capacity building for Nigerian staff, audit of machinery, equipment and financial records. <br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '21- F8A - Temporary Work Permit Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa (Expatriate) – R2A',
            'description' => 'R2A – Employment Visa (Expatriate) is a type of visa issued to persons who wish to take up employment in Nigeria based on expatriate quota. Eligibility for this visa type is for employed expatriates to be placed on quota. Work permit is for 2 years and it is renewable.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '22- R2A - Employment Visa (Expatriate).docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Spouse of Expatriate Visa – R2B',
            'description' => 'R2B – Spouse of Expatriate Visa is a type of visa issued to spouse of employed expatriate placed on quota in Nigeria. Eligibility for this visa type is for spouse of employed expatriates on quota. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '23- R2B - Spouse of Expatriate Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate (Minor) Visa – R2C',
            'description' => 'R2C – Dependant of Expatriate (Minor) Visa is issued to dependant of employed expatriate placed on quota in Nigeria who are less than 18 years of age. Eligibility for this visa type is for dependants less than 18 years of age accompanying employed expatriates on quota. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '24- R2C - Dependant of Expatriate (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate (18 years and above) Visa – R2D',
            'description' => 'R2D – Dependant of Expatriate (18 years and above) Visa is issued to dependant of employed expatriate placed on quota in Nigeria who are 18 years and above. Eligibility for this visa type is for dependants who are 18 years and above accompanying employed expatriates on quota. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '25- R2D - Dependant of Expatriate (18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate (Aged Parents - 65 years and above) Visa – R2E',
            'description' => 'R2E – Dependant of Expatriate Visa is issued to Aged parents of employed expatriate placed on quota in Nigeria who are 65 years and above. Eligibility for this visa type is for aged parents (65 years and above) who are accompanying employed expatriates on quota. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '26- R2E - Dependant of Expatriate (Aged Parents - 65 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa – Expatriate (Free Zone) – R3A',
            'description' => 'R3A – Employment Visa – Expatriate (Free Zone) is a type of visa issued to expatriates who wish to obtain employment within Free Zones in Nigeria. Work permit is for 2 years and it is renewable.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '27- R3A - Employment Visa - Expatriate (Free Zone).docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Spouse of Expatriate – Free Zone Visa – R3B',
            'description' => 'R3B – Spouse of Expatriate – Free Zone is a type of visa issued to spouse of employed expatriate in Free Zones. Eligibility for this visa type is for spouse of employed expatriates in Free Zones in Nigeria. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '28- R3B - Spouse of Expatriate - Free Zone Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate – Free Zone (Minor) Visa – R3C',
            'description' => 'R3C – Dependant of Expatriate – Free Zone (Minor) Visa is issued to dependant of employed expatriate in Free Zones who are less than 18 years of age. Eligibility for this visa type is for dependants less than 18 years of age accompanying employed expatriates in Free Zones. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '29- R3C - Dependant of Expatriate - Free Zone (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate – Free Zone (18 Years and above) Visa – R3D',
            'description' => 'R3C – Dependant of Expatriate – Free Zone Visa is issued to dependant of employed expatriate in Free Zones who are 18 years and above. Eligibility for this visa type is for dependants who are 18 years and above accompanying employed expatriates in Free Zones. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '30- R3D - Dependant of Expatriate - Free Zone (18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Dependant of Expatriate – Free Zone (Aged Parents - 65 years and above) Visa – R3E',
            'description' => 'R3E – Dependant of Expatriate Visa is issued to Aged parents of employed expatriate in Free Zones who are 65 years and above. Eligibility for this visa type is for aged parents (65 years and above) who are accompanying employed expatriates on in Free Zones. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '31- R3E - Dependant of Expatriate - Free Zone (Aged Parents 65 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa –  Cleric – R6A',
            'description' => 'R6A – Employment Visa (Cleric) is issued to expatriates who wish to obtain employment as a cleric in Nigeria. Work permit is for 2 years and it is renewable.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '32- R6A - Employment Visa - Cleric.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa - Spouse of Cleric – R6B',
            'description' => 'R6B – Employment Visa (Cleric) is issued to Spouse of employed cleric in Nigeria. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '33- R6B - Employment Visa - Spouse of Cleric.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa - Dependant of Cleric (Minor) – R6C',
            'description' => 'R6C – Employment Visa (Cleric) is issued to dependants of Employed Cleric in Nigeria who are less than 18 years of age. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '34- R6C - Employment Visa - Dependant of Cleric (Minor).docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa - Dependant of Cleric (18 Years and above) – R6D',
            'description' => 'R6D – Employment Visa (Cleric) is issued to dependants of Employed Cleric in Nigeria who are 18 years and above. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '35- R6D - Employment Visa - Dependant of Cleric (18 years and above).docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Employment Visa - Dependant of Cleric (Aged Parents - 65 Years and above) – R6E',
            'description' => 'R6E – Employment Visa (Cleric) is issued to Aged Parents of Employed Cleric in Nigeria who are 65 years and above. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '36- R6E - Employment Visa - Dependant of Cleric (Aged Parents - 65 years and above).docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Student Visa – R7A',
            'description' => 'R7A – Student Visa is issued for the purpose of schooling in Nigeria. Eligibility is for International Students. Residence permit is for 2 years and it is renewable.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '37- R7A - Student Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Spouse of Student Visa – R7B',
            'description' => 'R7B – Spouse of Student Visa is issued to the spouse of International Student in Nigeria. Eligibility is for Spouse accompanying student. Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '38- R7B - Spouse of Student Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Academic Exchange Programme (AEP) Visa – R8A',
            'description' => 'R8A – AEP Visa is issued for the purpose of Resident Academic Exchange Programme (AEP) in Nigeria. Those eligible for this visa type are students, scholars, lecturers, researchers, sabbaticals, law enforcement and security officers. Residence permit is for 2 years and it is renewable.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '39- R8A - Academic Exchange Programme (AEP) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Spouse of AEP Visa – R8B',
            'description' => 'R8B – Spouse of AEP Visa is issued to Spouse of Academic Exchange Programme (AEP). Eligibility is for Spouse accompanying AEP Participant Residence permit subject to validity of the principal.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '40- R8B - Spouse of AEP Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 2,
            'visa_type' => 'Standard',
            'title' => 'Intern Visa – R9A',
            'description' => 'R9A – Intern Visa is issued to persons who wis to undergo resident internship programme in Nigeria. Those eligible for this visa type are interns. Residence permit is for 1 year. Multiple entry.<br/><br/>
            
            1	APPOINTMENT: OIS Appointment booking for each applicant, please do not book more than 30 days before travel. Book your appointment at   https://apt.oisservices.com/.<br/><br/>
             
            2	TRAVEL DOCUMENTS:  Passport/Travel Document a minimum of 6 months validity at the time of travelling to and from Nigeria with two blank facing pages. <br/>
            
            The mission will hold passport/Travel Documents until a decision has been made.<br/>
            
            If non-Dutch/Netherlands passport holders, please see IMPORTANT INFORMATION below. 	 <br/><br/>
            3	PASSPORT SIZE PHOTOS: Two recent standard passport-sized photographs, taken no more than 2 weeks before submission, with the applicants full name written on the back.	 <br/><br/>
            4	ONLINE APPLICATION FORM: Completed application form filled and paid for online at https://visa.immigration.gov.ng/. <br/>
            
            Once completed this must be printed out, in portrait, signed, and dated by applicant.	 <br/><br/>
             5	ONLINE PAYMENT RECEIPTS: Payment and acknowledgement slips, available online once payment has been complete – Printed from https://portal.immigration.gov.ng/visa/OnlineQueryStatus <br/>
            
            Or Payment receipt - Printed from https://visa.immigration.gov.ng/ after completion of payment.	<br/><br/>
            6	LETTER OF INTRODUCTION:<br/>
            •	A formal typed letter of introduction (mention where you work, etc). <br/>
            •	The Letter must be addressed to the Nigerian Embassy in The Hague, Netherlands.<br/>
            •	The letter must include the address where the applicant is living in Netherlands.<br/>
            •	The applicant must consent to take full immigration and accommodation expenses. <br/>
            •	The applicant must give a comprehensive purpose of the visit.	<br/><br/>
            7	APPLICANT’S BANK STATEMENT & PAYSLIP: A copy of the applicant\'s most recent bank statement (bank statement of at least the past 3 months) AND a copy of their Company PAY SLIP (Payslip of at least the past 3 months) showing their name, address and company.	 <br/><br/>
            8	COPY OF APPLICANT’S DESTINATION VISA: Applicant should include a copy of the destination visa. Applicant should have gotten their destination visa before applying for a transit visa to Nigeria.	<br/><br/>
            9	HOTEL RESERVATION: A copy of hotel reservation.	<br/><br/>
            10	VALID PASSPORT DATA PAGE: Copy of Applicant valid passport data page. <br/>
            
            NOTE: It must be coloured copy with a full-page shown.	<br/><br/> 
            11	Flight Reservation -Onward ticket to the next destination	 <br/><br/>
            12	Copy of the Yellow Fever Vaccine (strict requirement, except for medical exemption with proof).<br/>
            
            Copy of the COVID Vaccine certificate (non-strict requirement, kindly provide if taken).	<br/><br/>
            13	Express Service (Optional)- Additional 150  Euros made payable to NIGERIA EMBASSY THE HAGUE	<br/><br/>
            
            MUST READ IMPORTANT INFORMATION<br/><br/>
            ONLY APPLICANTS APPLYING FOR VISAS ARE ALLOWED INSIDE THE OFFICE. ALL APPLICANTS MUST RESPECT THE SOCIAL DISTANCE INSIDE THE OFFICE AND MUST WEAR FACE MASKS BEFORE ENTERING THE OFFICE.<br/>
            APPLICANTS APPLICATIONS WILL NOT BE PROCESSED IF THEY DO NOT MEET UP WITH THE VISA REQUIREMENTS GIVEN IN THE VISA CHECKLIST<br/><br/>
            PROCESSING TIME<br/>
            	Regular Service  7 working days <br/>
            	Express Service- 24 hours <br/>
            	Applicants for visa/s are to submit their application in person as you are now required to capture biometrics as a part of the visa requirements.<br/>
            	Applications submitted after 12.30 PM will be treated as next-day applications.<br/>
            	All documents including the OIS Appointment Booking Slip must be provided, or your application will not be accepted.<br/>
            	All letters must be formal letters they should be typed, printed in portrait, addressed to the Embassy of Nigeria, The Hague, The Netherlands.<br/>
            	Documents not in English must be submitted with a certified translated copy.<br/>
            
            	Non-Dutch Nationals – NON DUTCH CITIZEN MUST PRESENT PROOF
                             OF LEGAL RESIDENCE (UITREKSEL)<br/><br/>
            PAYMENTS TO BE MADE <br/>
            	Online Visa Fee <br/>
            	Express Fee (Optional) <br/><br/>
             
            Please check our opening hours to avoid delays, and for any additional information, please call us on +31708915324, email us infothehague@oisservices.com or visit our website www.oisservices.com
            ',
            'file_name' => '41- R9A - Intern Visa.docx',
        ]);
    }
}
