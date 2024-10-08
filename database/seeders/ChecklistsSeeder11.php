<?php

namespace Database\Seeders;

use App\Checklist;
use Illuminate\Database\Seeder;

class ChecklistsSeeder11 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Fees',
            'title' => 'Guangzhou Center Fees',
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
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Diplomatic（Non-Accredited） Visa---F2A',
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
            'file_name' => '42- F2A - Non-Accredited Diplomatic Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Accredited Diplomat Visa- R1A',
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
            'file_name' => '43- R1A - Accredited Diplomatic Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Spouse of Accredited Diplomat Visa- R1B',
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
            'file_name' => '44- R1B - Spouse of Accredited Diplomat.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Minor) of Accredited Diplomat Visa- R1C',
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
            'file_name' => '45- R1C - Dependant of Diplomat (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (18 years & above) of Accredited Diplomat Visa-R1D',
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
            'file_name' => '46- R1D - Dependant of Diplomat ( 18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Diplomatic',
            'title' => 'Dependant (Aged Parents – 65 years & above) of Accredited Diplomat Visa-R1E',
            'description' => 'R1E : Visa is issued to aged parents (65 years and above) of accredited diplomat as dependants with each case treated on its merit.<br/><br/>
            Eligibility：<br/>
            Aged Parents (65 years and above) of Accredited Diplomats<br/><br/>
            REQUIREMENTS:<br/><br/>
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
            'file_name' => '47- R1E - Dependant of Diplomat - Aged Parents (65 years and above Visa).docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Official',
            'title' => 'Employment Visa – Expatriate (Government Official) Visa: R4A',
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
            'file_name' => '48- R4A - Employment Expatriate (Government Official) Visa.docx',
        ]);
        Checklist::create([
          'office_id' => 11,
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
          'file_name' => '49- R4B - Spouse of GO Visa.docx',
        ]);
        Checklist::create([
          'office_id' => 11,
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
          'file_name' => '50- R4C - Dependant of GO (Minor) Visa.docx',
        ]);
        Checklist::create([
          'office_id' => 11,
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
          'file_name' => '51- R4D - Dependant of GO (18 years and above) Visa.docx',
        ]);
        Checklist::create([
          'office_id' => 11,
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
          'file_name' => '52- R4E - Dependant of GO (Aged Parents - 65 years and above Visa).docx',
        ]);
        Checklist::create([
            'office_id' => 11,
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
            'file_name' => '53- R5A - Employment (INGO) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
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
            'file_name' => '54- R5B - Spouse of INGO Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Dependant (Minor) of INGO Staff: R5C',
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
            'file_name' => '55- R5C - Dependant of INGO (Minor) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Dependant (18 years and above) of INGO Staff: R5D',
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
            'file_name' => '56- R5D - Dependant of INGO (18 years and above) Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'UN',
            'title' => 'Employment Visa – Dependant (aged parents, 65 years and above) of INGO Staff: R5E',
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
            'file_name' => '57- R5E - Dependant of INGO (Aged Parents - 65 years and above Visa).docx',
        ]);
        Checklist::create([
            'office_id' => 11,
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
            'file_name' => '1- F3B - Transit Visa.docx',
        ]);
        Checklist::create([
            'office_id' => 11,
            'visa_type' => 'Standard',
            'title' => 'Business –Multiple Entry Visa-F4B ',
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
            'file_name' => '2- F4A- Business Visa.docx',
        ]);
    }
}
