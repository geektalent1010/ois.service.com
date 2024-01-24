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
            'office_id' => 10,
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
            'office_id' => 10,
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
            'office_id' => 10,
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
            'office_id' => 10,
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
            'office_id' => 10,
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
            'office_id' => 10,
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
            'office_id' => 10,
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
          'office_id' => 10,
          'visa_type' => 'Official',
          'title' => 'Spouse of Employed Expatriate (Government Official) Visa − R4B',
          'description' => 'R4A − Spouse of Employed Expatriate (Government Official) Visa is issued to spouse of Expatriate employed by Government as Government Official in Nigeria<br/><br/>
          Eligibility<br/><br/>
          Spouse accompanying Expatriates employed by Government in Nigeria<br/><br/>
          Requirements<br/><br/>
          1.	Passport valid for at least 6 months with at least 2 blank visa pages for endorsement<br/>
          2.	Formal application for R4B Visa by the Employer (Government) accepting Immigration Responsibility<br/>
          3.	Letter from the principal immigrant<br/>
          4.	Two recent passport sized photographs. (White background)<br/>
          5.	Payment and acknowledgement slips are available once the application is complete-Printed from www.immigration.gov.ng or portal.immigration.gov.ng/ visa/ OnlineQueryStatus<br/><br/>
          PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONALINFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE WWW.OISSERVICES.COM
          ',
          'file_name' => 'R4B- SPOUSE OF GO VISA.docx',
        ]);
        Checklist::create([
          'office_id' => 10,
          'visa_type' => 'Official',
          'title' => 'Dependant (Minor) of Employed Expatriate (Government Official) Visa – R4C',
          'description' => 'R4C− Dependants (Minor) of Employed Expatriate (Government Official) Visa is visa issued to dependants of expatriates employed by Government, who are less than 18 years of age<br/><br/>
          Eligibility<br/><br/>
          Dependants (less than 18 years) accompanying Expatriates employed by Government in Nigeria<br/><br/>
          Requirements<br/><br/>
          1.	Passport valid for at least 6 months with at least 2 blank visa pages for endorsement<br/>
          2.	Formal application for R4C Visa by the Employer (Government) accepting Immigration Responsibility<br/>
          3.	Letter from the principal immigrant<br/>
          4.	Payment and acknowledgement slips are available once the application is complete-Printed from www.immigration.gov.ng or portal.immigration.gov.ng/ visa/ OnlineQueryStatus<br/>
          5.	Two recent passport sized photographs. (White background)<br/><br/>
          PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONALINFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE WWW.OISSERVICES.COM
          ',
          'file_name' => 'R4C- DEPENDANT OF GO(MINOR) VISA.docx',
        ]);
        Checklist::create([
          'office_id' => 10,
          'visa_type' => 'Official',
          'title' => 'Dependant of (18 years and above) of Employed Expatriate (GO) Visa – R4D',
          'description' => 'R4D−Dependant of Employed Expatriate (GO) Visa is issued to dependants of expatriates employed by Government, who are 18 years and above<br/><br/>
          Eligibility:<br/><br/>
          Dependants (18 years and above) accompanying Expatriates employed by Government in Nigeria<br/><br/>
          Requirements:<br/><br/>
          1.	Passport valid for at least 6 months with at least 2 blank visa pages for endorsement<br/>
          2.	Two recent passport sized photographs. (White background)<br/>
          3.	Formal application for R4D Visa by the Employer (Government) accepting Immigration Responsibility<br/>
          4.	Letter from the principal immigrant<br/>
          5.	Payment and acknowledgement slips are available once the application is complete-Printed from www.immigration.gov.ng or portal.immigration.gov.ng/ visa/ OnlineQueryStatus<br/><br/>
          PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONALINFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE WWW.OISSERVICES.COM
          ',
          'file_name' => 'R4D- DEPENDANT OF GO(18 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
          'office_id' => 10,
          'visa_type' => 'Official',
          'title' => 'Dependant (Aged Parents – 65 years and above) of Employed Expatriate (GO) Visa – R4E',
          'description' => 'R4E Visa is issued to aged parents (65 years and above) of expatriates employed by Government.<br/><br/>
          Eligibility:<br/><br/>
          Aged parents (65 years and above) accompanying employed Expatriates employed by Government in Nigeria<br/><br/>
          Requirements:<br/><br/>
          1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
          2. Two recent passport sized photographs. (White background)<br/>
          3.Formal application for R4E Visa by the Employer (Government) accepting Immigration<br/>
          4. Payment and acknowledgement slips are available once the application is complete printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/>
          5. Letter from the principal immigrant<br/><br/>
          
          
          PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
          ',
          'file_name' => 'R4E- DEPENDANT OF GO(AGED PARENTS-65 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – INGO : R5A',
            'description' => 'R5A - Employment Visa (INGO) is issued to expatriates who wish to obtain employment with International Non-Governmental Organisations operating in Nigeria.<br/><br/>

            Eligibility: <br/><br/>
              
              INGO workers<br/><br/>
            
            Requirements:<br/><br/>
            
            1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2. Two recent passport sized photographs. (White background)<br/>
            3.MoU with Nigeria National Planning Commission (NPC) and appropriate security clearance (for special security cases)<br/>
            4. Formal application for R5A Visa by the Employer accepting Immigration Responsibility.<br/>
            5. Payment and acknowledgement slips are available once the application is complete Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R5A-EMPLOYMENT (INGO) VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Spouse of INGO Staff: R5B',
            'description' => 'R5B - Employment Visa - Spouse of INGO Staff is issued to spouse of INGO Staff<br/><br/>

            Eligibility:<br/><br/>
            
            Spouse accompanying INGO Staff<br/><br/>
            
            Requirements:<br/><br/>
            
            1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2. Two recent passport sized photographs. (White background)<br/>
            3. Formal application for R5B Visa by the Employer of spouse, accepting Immigration Responsibility<br/>
            4. Letter from the principal immigrant<br/>
            5. Payment and acknowledgement slips are available once the application is complete<br/>
            Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R5B-SPOUSE OF INGO STAFF VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'UN',
            'title' => 'Employment Visa - Dependant (Minor) of INGO Staff: R5C',
            'description' => 'R5C - Employment Visa - Dependant (Minor) of INGO Staff is visa issued to dependants of INGO Staff, who are less than 18 years of age.<br/><br/>

            Eligibility:<br/><br/>
            
            Dependants (less than 18 years) accompanying INGO Staff<br/><br/>
            
            Requirements:<br/><br/>
            
            1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2. Two recent passport sized photographs. (White background)<br/>
            3. Formal application for R5C Visa by the Employer accepting Immigration responsibility.<br/>
            4. Letter from the principal immigrant<br/>
            5. Payment and acknowledgement slips are available once the application is complete<br/>            Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.            
            ',
            'file_name' => 'R5C- DEPENDANT OF INGO(MINOR) VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'UN',
            'title' => 'Employment Visa - Dependant (18 years and above) of INGO Staff: R5D',
            'description' => 'R5D - Employment Visa - Dependant (18 years and above) of INGO Staff is issued to dependants of INGO Staff who are 18 years and above.<br/><br/>

            Eligibility:<br/><br/>
            
            Dependants (18 years and above) accompanying INGO Staff<br/><br/>
            
            Requirements:<br/><br/>
            
             1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
             2. Two recent passport sized photographs. (White background)<br/>
             3. Formal application for R5D Visa by the Employer (Government) accepting Immigration Responsibility<br/>
             4. Letter from the principal immigrant<br/>
             5. Payment and acknowledgement slips are available once the application is complete <br/>           Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'R5D- DEPENDANT OF INGO(18 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'UN',
            'title' => 'Employment Visa - Dependant (aged parents, 65 years and above) of INGO Staff: R5E',
            'description' => 'R5E - Employment Visa - Dependant (18 years and above) of INGO Staff is issued to aged parents (65 years and above) of INGO Staff<br/><br/>

            Eligibility:<br/><br/>
            
            Aged parents (65 years and above) accompanying INGO Staff<br/><br/>
            
            Requirements:<br/><br/>
            
            1. International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2. Two recent passport sized photographs. (White background)<br/>
            3. Formal application for R5E Visa by the Employer accepting Immigration Responsibility<br/>
            4. Letter from the principal immigrant<br/>
            5.Payment and acknowledgement slips are available once the application is complete  <br/>          Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.            
            ',
            'file_name' => 'R5E- DEPENDANT OF INGO(AGED PARENT-65 YEARS AND ABOVE) VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'Standard',
            'title' => 'Transit Visa-F3B ',
            'description' => 'Transit Visa-F3B is for the passengers with onward ticket to the next destination.<br/><br/>
            Eligibility:<br/><br/>
            Transit Passengers who have onward ticket to the next destination and wish to enter Nigeria before proceeding on the onward journey.<br/><br/>
            Requirements:<br/><br/>
            1.	International Passport with a minimum of 6 months validity<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Onward ticket to the next destination<br/>
            4.	Payment and acknowledgement slips are available once the application is complete-Printed from www.immigration.gov.ng or portal.immigration.gov.ng/ visa/ OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'F3B- TRANSIT VISA.docx',
        ]);
        Checklist::create([
            'office_id' => 10,
            'visa_type' => 'Standard',
            'title' => 'Business –Single Entry Visa-F4A ',
            'description' => 'F4A: Business-Single Entry Visa is for those who wish to visit Nigeria for business meetings, Conference, Seminar, Contract negotiation, marketing, sales procurement of Nigerian goods/Services, trade fairs and job interview.<br/><br/>
            Eligibility:<br/><br/>
            Foreign Travellers who wish to visit Nigeria for the purpose of attending meetings, Conference, Seminar, Contract negotiation, marketing, sales, procurement of Nigerian goods/Services, trade fairs and job interview.<br/><br/>
             Requirements:<br/><br/>
            1.	International Passport with a minimum of 6 months validity and valid UAE residence visa with minimum 1 month validity. Must have 3 continuous blank facing pages.<br/>
            2.	Two recent passport sized photographs. (White background)<br/>
            3.	Letter of invitation from Nigeria (signed and dated), addressed to the processing center (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application form, accepting full immigration responsibility/evidence of sustaining self while in Nigeria. Letter must state the exact reason of travel, as well as Nigerian contact number and address.<br/>
            4.	If invitee is Nigerian, please provide Passport copy. (Please note that invitee’s signature must match the signature in their passport). In the event the invitee has no valid passport then provide their voters ID or NIN slip. On condition that the invitee’s not Nigerian, please provide proof of residency in Nigeria i.e., Nigeria CERPAC card and their valid passport data page copy)<br/>
            5.	Letter of incorporation from Nigeria (Inviting-company Business License).<br/>
            6.	Provide original NOC (letter from Company/Sponsor) addressed to the processing center (Nigerian Embassy Abu Dhabi or Nigerian Consulate Dubai) selected on the online application signed and stamped with the signatory’s name. Additionally attach copies of NOC signatories;<br/>
            •	Emirates ID (front & back)<br/>
            •	Residence Visa<br/>
            •	Passport data page NOC must state the current immigration and employment of the applicant’s status. The employer must also clearly state that he is aware of the employee trip to Nigeria.<br/>
            7.	UAE company Trade license.<br/>
            8.	State the intended date of arrival and the duration of stay in both letters.<br/>
            9.	Return ticket<br/>
            10.	Evidence of sufficient fund<br/>
            11.	Evidence of Hotel Reservation/host address in Nigeria<br/>
            12.	Payment and acknowledgement slips are available once the application is complete – Printed from www.immigration.gov.ng ORortal.immigration.gov.ng/visa/OnlineQueryStatus.<br/><br/>
            
            PLEASE CHECK OUR OPENING HOURS TO AVOID DELAYS AND FOR ANY ADDITIONAL
            INFORMATION, PLEASE CALL US ON +97142765448 OR VISIT OUR WEBSITE.
            ',
            'file_name' => 'F4A- BUSINESS VISA.docx',
        ]);
    }
}
