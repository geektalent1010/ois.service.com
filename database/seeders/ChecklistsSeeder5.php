<?php

namespace Database\Seeders;

use App\Checklist;
use Illuminate\Database\Seeder;

class ChecklistsSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'F2A-Diplomatic Visa',
            'description' => 'Diplomatic (Non -accredited) Visa is a single-entry short visit visa for non- accredited Diplomats who wish to enter Nigeria for official business.<br/><br/>
            Eligibility:<br/><br/>
            A.	Non- accredited Diplomats<br/>
            B.	Temporary Work Diplomats<br/><br/>
            Requirements:<br/><br/>
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            4.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            5.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            6.	Provide original NOC (letter from Company/Sponsor) addressed to the processing center (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application signed and stamped with the signatory’s name. Additionally attach copies of NOC signatories;<br/>
            •	Emirates ID (front & back)<br/>
            •	Residence Visa<br/>
            •	Passport data page NOC must state the current immigration and employment of the applicant’s status. The employer must also clearly state that he is aware of the employee trip to Nigeria.<br/>
            7.	UAE company Trade license.<br/>
            8.	Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats if you are applying for business ignore this document)<br/>
            9.	State the intended date of arrival and the duration of stay in both letters.<br/>
            10.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'F2A-NON-ACCREDITED DIPLOMATIC VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'Accredited Diplomat Visa- R1A',
            'description' => 'R1A- Accredited Diplomat Visa is issued to accredited Diplomats to Nigeria<br/><br/>

            Eligibility:<br/><br/>
            
            Accredited Diplomats<br/><br/>
            
            Requirements:<br/><br/>
            
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng Portal.immigration.gov.ng/visa/OnlineQueryStatus.<br/>
            4.	Letter from Nigeria’s Ministry of Foreign Affairs.<br/>
            5.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            6.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            7.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            8.	Original NOC letter from Company/Sponsor should be addressed to the processing center selected on the online application form with name and signature, also attach copies of NOC signatories<br/>
            	Business License<br/>
            	Emirates ID (front & back)<br/>
            	Residence Visa<br/>
            	Passport data page<br/>
            9.	Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats)<br/>
            10.	State the intended date of arrival and the duration of stay in both letters.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R1A- ACCREDITED DIPLOMATIC VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'Spouse of Accredited Diplomat Visa-R1B',
            'description' => 'R1B -Spouse of Accredited Diplomat Visa is issued to spouse of accredited Diplomats to Nigeria<br/><br/>

            Eligibility:<br/><br/>
            
            Accredited Diplomats<br/><br/>
            
            Requirements:<br/><br/>
            
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background).<br/>
            3.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng or Portal.immigration.gov.ng/visa/ OnlineQueryStatus.<br/>
            4.	Letter from Nigeria’s Ministry of Foreign Affairs.<br/>
            5.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            6.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy).<br/>
            7.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            8.	Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats)<br/>
            9.	State the intended date of arrival and the duration of stay in both letters. Marriage Certificate.<br/>
            10.	Original NOC letter from Company/Sponsor should be addressed to the processing centre selected on the online application form with name and signature, also attach copies of NOC signatories<br/>
            •	Business License<br/>
            •	Emirates ID (front & back)<br/>
            •	Residence Visa<br/>
            •	Passport data page<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R1B- SPOUSE OF ACCREDITED DIPLOMAT.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Minor) of Accredited Diplomat Visa-R1C',
            'description' => 'R1C- Visa is a type of visa issued to dependants of accredited Diplomat who are less than 18 years of age<br/><br/>


            Eligibility:<br/><br/>
            
            Accredited Diplomats<br/><br/>
            
            Requirements:<br/><br/>
            
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng Portal.immigration.gov.ng/visa/OnlineQueryStatus.<br/>
            4.	Letter from Nigeria’s Ministry of Foreign Affairs.<br/>
            5.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            6.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            7.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            8.	Consent Letter from the Guardian/Parents or Sponsor<br/>
            9.	Passport and visa copy of the person who signed the Consent letter<br/>
            10.	Birth Certificate of the Applicant<br/>
            11.	Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats)<br/>
            12.	State the intended date of arrival and the duration of stay in both letters.<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R1C-DEPENDANT OF DIPLOMAT(MINOR) VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (18 yrs. & above) of Accredited Diplomat Visa- R1D',
            'description' => 'R1D- Visa is issued to dependants of accredited Diplomat who are 18 years and above<br/><br/>

            Requirements:<br/><br/>
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng Portal.immigration.gov.ng/visa/OnlineQueryStatus.<br/>
            4.	Letter from Nigeria’s Ministry of Foreign Affairs.<br/>
            5.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            6.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            7.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            8.	Consent Letter from the Guardian/Parents or Sponsor<br/>
            9.	Passport and visa copy of the person who signed the Consent letter<br/>
            10.	Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats)<br/>
            11.	State the intended date of arrival and the duration of stay in both letters.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R1D-DEPENDANT OF DIPLOMAT(18 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Aged Parents − 65yrs & above) of Accredited Diplomat',
            'description' => 'Visa − R1E
            R1E − Visa is issued to aged parents (65 years and above) of accredited Diplomat as dependants with each case treated on its merit.<br/><br/>
            
            Eligibility:<br/><br/>
            Aged Parents (65 years and above) of Accredited Diplomats<br/><br/>
            
            Requirements:<br/><br/>
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa<br/>
            2.	with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            3.	Two recent passport sized photographs. (White background)<br/>
            4.	Letter of invitation from Nigeria (signed and dated), addressed to the processing centre<br/>
            5.	(Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online 
            application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            6.	 If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            7.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            8.	Provide original NOC (letter from Company/Sponsor) addressed to the processing centre (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application signed and stamped with the signatory’s name. Additionally attach copies of NOC signatories;<br/>
            Emirates ID (front &amp; back)<br/><br/>
            Residence Visa<br/><br/>
            9. Passport data page NOC must state the current immigration and employment of the applicant’s status. The employer must also clearly state that he is aware of the employee trip to Nigeria.<br/>
            10. UAE company Trade license.<br/>
            11. Copy of Approved cablegram from the Director of Immigration Services, Abuja address it to Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai (Applicable only for Temporary Work Diplomats)<br/>
            12. State the intended date of arrival and the duration of stay in both letters.<br/>
            13. Payment and acknowledgement slips are available once the application is complete –
            Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONALINFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE WWW.OISSERVICES.COM
            ',
            'file_name' => 'R1E-DEPENDANT OF DIPLOMAT- AGED PARENTS(65 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Official',
            'title' => 'Employment Visa − Expatriate (Government Official) Visa: R4A',
            'description' => 'R4A − Employment Visa − Expatriate (Government Official) is issued to expatriates who wish to obtain employment with Government as Government Official in Nigeria<br/><br/>
            Eligibility:<br/><br/>
            Expatriates wishing to work as Government Officials in Nigeria<br/><br/>
            Requirements:<br/><br/>
            1.	Passport valid for at least 6 months with at least 2 blank visa pages for endorsement<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Employment Letter by the Government<br/>
            4.	Offer and Acceptance Letter<br/>
            5.	Payment and acknowledgement slips are available once the application is complete-Printed from www.immigration.gov.ng or portal.immigration.gov.ng/ visa/ OnlineQueryStatus<br/><br/>
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONALINFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE WWW.OISSERVICES.COM
            ',
            'file_name' => 'R4A- EMPLOYMENT EXPATRIATE(GOVERNMENT OFFICIAL) VISA.docx',
        ]);
        Checklist::create([
          'center_id' => 6,
          'visa_type' => 'Official',
          'title' => 'Spouse of Expatriate Expatriate (Government Official) Visa – R4B',
          'description' => 'REQUIREMENTS:<br/><br/>
          •	ORIGINAL PASSPORT:<br/>
          Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
          •	PASSPORT PHOTO:<br/>
          Two (2) recent passport sized (35x40mm) photographs <br/><br/>
          •	Online Payment <br/>
          A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
          •	Application form <br/>
          Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
          •	Return Ticket <br/><br/>
          •	Evidence of sufficient fund  <br/>
          Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
          •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
          •	Note Verbal ',
          'file_name' => 'R4B- SPOUSE OF GO VISA.docx',
        ]);
        Checklist::create([
          'center_id' => 6,
          'visa_type' => 'Official',
          'title' => 'Dependant (Minor) of Employed Expatriate (Government Official) Visa – R4C',
          'description' => 'REQUIREMENTS:<br/><br/>
          •	ORIGINAL PASSPORT:<br/>
          Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
          •	PASSPORT PHOTO:<br/>
          Two (2) recent passport sized (35x40mm) photographs <br/><br/>
          •	Online Payment <br/>
          A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
          •	Application form <br/>
          Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
          •	Return Ticket <br/><br/>
          •	Evidence of sufficient fund  <br/>
          Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
          •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
          •	Note Verbal ',
          'file_name' => 'R4C- DEPENDANT OF GO(MINOR) VISA.docx',
        ]);
        Checklist::create([
          'center_id' => 6,
          'visa_type' => 'Official',
          'title' => 'Dependant of (18 years and above) of Employed Expatriate (GO) Visa – R4D',
          'description' => 'REQUIREMENTS:<br/><br/>
          •	ORIGINAL PASSPORT:<br/>
          Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
          •	PASSPORT PHOTO:<br/>
          Two (2) recent passport sized (35x40mm) photographs <br/><br/>
          •	Online Payment <br/>
          A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
          •	Application form <br/>
          Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
          •	Return Ticket <br/><br/>
          •	Evidence of sufficient fund  <br/>
          Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
          •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
          •	Note Verbal ',
          'file_name' => 'R4D- DEPENDANT OF GO(18 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
          'center_id' => 6,
          'visa_type' => 'Official',
          'title' => 'Dependant (Aged Parents – 65 years and above) of Employed Expatriate (GO) Visa – R4E',
          'description' => 'REQUIREMENTS:<br/><br/>
          •	ORIGINAL PASSPORT:<br/>
          Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
          •	PASSPORT PHOTO:<br/>
          Two (2) recent passport sized (35x40mm) photographs <br/><br/>
          •	Online Payment <br/>
          A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
          •	Application form <br/>
          Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
          •	Return Ticket <br/><br/>
          •	Evidence of sufficient fund  <br/>
          Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
          •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
          •	Note Verbal ',
          'file_name' => 'R4E- DEPENDANT OF GO(AGED PARENTS-65 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Standard',
            'title' => 'Transit Visa-F3B ',
            'description' => 'REQUIREMENTS:<br/><br/>
            •	ORIGINAL PASSPORT:<br/>
            Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
            •	PASSPORT PHOTO:<br/>
            Two (2) recent passport sized (35x40mm) photographs <br/><br/>
            •	Online Payment <br/>
            A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
            •	Application form <br/>
            Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
            •	Return Ticket <br/><br/>
            •	Evidence of sufficient fund  <br/>
            Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
            •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
            •	Note Verbal ',
            'file_name' => 'F3B- TRANSIT VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'Standard',
            'title' => 'Business –Single Entry Visa-F4A ',
            'description' => 'REQUIREMENTS:<br/><br/>
            •	ORIGINAL PASSPORT:<br/>
            Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
            •	PASSPORT PHOTO:<br/>
            Two (2) recent passport sized (35x40mm) photographs <br/><br/>
            •	Online Payment <br/>
            A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
            •	Application form <br/>
            Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
            •	Return Ticket <br/><br/>
            •	Evidence of sufficient fund  <br/>
            Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
            •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
            •	Note Verbal ',
            'file_name' => 'F4A- BUSINESS VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – INGO : R5A',
            'description' => 'REQUIREMENTS:<br/><br/>
            •	ORIGINAL PASSPORT:<br/>
            Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
            •	PASSPORT PHOTO:<br/>
            Two (2) recent passport sized (35x40mm) photographs <br/><br/>
            •	Online Payment <br/>
            A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
            •	Application form <br/>
            Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
            •	Return Ticket <br/><br/>
            •	Evidence of sufficient fund  <br/>
            Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
            •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
            •	Note Verbal ',
            'file_name' => 'R5A-EMPLOYMENT (INGO) VISA.docx',
        ]);
        Checklist::create([
            'center_id' => 6,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Spouse of INGO Staff: R5B',
            'description' => 'REQUIREMENTS:<br/><br/>
            •	ORIGINAL PASSPORT:<br/>
            Passport valid for at least 6 months with at least 2 blank passport pages for endorsement Non-Chinese passport holder must provide Resident Permit with a minimum of 3 months validity.<br/><br/>
            •	PASSPORT PHOTO:<br/>
            Two (2) recent passport sized (35x40mm) photographs <br/><br/>
            •	Online Payment <br/>
            A copy of the Acknowledgment slip must be Printed from https://portal.immigration.gov.ng/<br/><br/>
            •	Application form <br/>
            Complete the visa application form online at  visa.immigration.gov.ng. Once completed, must be printed out, signed, and dated by the applicant.<br/><br/>
            •	Return Ticket <br/><br/>
            •	Evidence of sufficient fund  <br/>
            Original evidence of sufficient fund of applicant, with bank\'s stamp<br/><br/>
            •	Evidence of Hotel Reservation/host address in Nigeria<br/><br/>
            •	Note Verbal ',
            'file_name' => 'R5B-SPOUSE OF INGO STAFF VISA.docx',
        ]);
    }
}
