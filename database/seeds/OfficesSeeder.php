<?php

use Illuminate\Database\Seeder;

class OfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "
        INSERT INTO `offices` VALUES (1, 'Nigeria', 'Abuja', 'No.5 Onitsha Crescent, Off Gimbiya Street, Area 11, Garki, Abuja', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (2, 'Netherlands', 'Amsterdam/ The Hague', 'First Floor, Regus Building, Koningin Juliana Plein 10. Postcode 2595AA, The Hague Central station,', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (3, 'Turkey', 'Ankara', 'Buyukesat Mahallesi, Ugur Mumcu\'nun Sokagi, Konak Apartmani, No:49/3 CANKAYA/ANKARA', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (4, 'USA', 'Atlanta', 'OIS Atlanta. GA, 918 Holcomb Bridge Road, Suite 204, Roswell, Atlanta, GA 30076', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (5, 'China', 'Beijing', 'Suite 908, Building B Kunsha Centre, No. 16 Xin Yuan Li Street, Chaoyang District, Beijing.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (6, 'Lebanon', 'Beirut', 'OIS Services, Beirut, Lebanon Jnah-Beirut Opposite Rafik Hariri University Hospital Mais 6', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (7, 'Egypt', 'Cairo', '2ND FLOOR AT 51-ELNOOR ST, ELDOKI, GIZA, EGYPT.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (8, 'South Africa', 'Cape Town', 'No 50, Long Street, Cape Town.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (9, 'USA', 'Chicago', '4001 West Devon, Suite 509. Chicago IL 60646 ', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (10, 'UAE', 'Dubai', '22A (22nd floor), Silver Tower, Cluster I, Jumeirah Lake Towers, Dubai, U.A.E', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (11, 'China', 'Guangzhou', 'Room 8E, 8th floor, Wingkin Square, No.29 Jianshe6malu, Yuexiu District, Guangzhou.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (12, 'USA', 'Houston', 'OIS Services, 9894 Bissonnet Street, Suite 745 Houston TX 77036.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (13, 'South Africa', 'Johannesburg', '6 Bolton Road Parkwood Rosebank, 2193, Johannesburg, South Africa', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (14, 'UK', 'London', '56-57 Fleet Street, London, EC4Y 1JU', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (15, 'USA', 'Los Angeles', 'OIS Los Angeles 5757 West Century Blvd, Suite 718 Los Angeles CA 90045 ', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (16, 'Spain', 'Madrid', 'C.de Maudes, 62. 28003, Madrid', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (17, 'India', 'Mumbai', 'Plot No. C-38/39, Parinee Crescenzo, G-Block, 12th Floor, Bandra Kurla Complex, Bandra East, Taluka-Andheri, Mumbai - 400051, Maharashtra.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (18, 'India', 'New Delhi', 'C/O Central Board of Irrigation & Power Plot No. 4, Ground Floor, Institutional Area, Malcha Marg, Chanakyapuri New Delhi-110021', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (19, 'USA', 'New York', 'OIS New York, 370 Lexington Ave, Suite 613 New York, NY 10017.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (20, 'France', 'Paris', '9 Rue Paul Valery 75116 Paris, France', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (21, 'Italy', 'Rome', 'Solutions S.R.L., Via Sicilia, 30 00187 Rome, Italy', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (22, 'China', 'Shanghai', 'Room 506A, Zhongguancun Science Building, No.2911 North Zhongshan Road, Putuo', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (23, 'USA', 'Washington DC', 'OIS WASHINGTON DC, 11900 Parklawn Drive Suite 160, Rockville MD 20852.', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (24, 'Germany', 'Berlin', 'Warmensteinacherstraße Straße 59 a, 12349 Berlin, Germany', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (25, 'Morocco', 'Rabat', 'Millennium Business Centre, Av. Mehdi Ben Barka, Rabat 10170. Morocco', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (26, 'Turkey', 'Istanbul', 'OIS Istanbul Sahrayıcedit Mahallesi, Atatürk Caddesi, Onur İş Merkezi, B Blok, No:3/7 Kadıköy/İstanbul', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (27, 'Manchester', 'UK', 'OIS SERVICES Regus ST JAMES TOWER 7 Charlotte Street Manchester M1 4DZ United Kingdom ', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (28, 'Germany ', 'Frankfurt', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (29, 'Hungary ', 'Budapest', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (30, 'Ireland ', 'Dublin', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (31, 'Belgium ', 'Brussels', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (32, 'Sweden ', 'Stockholm', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (33, 'Austria ', 'Vienna', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (34, 'Romania ', 'Bucharest', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (35, 'Poland ', 'Warsaw', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (36, 'Portugal ', 'Lisbon', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (37, 'Greece ', 'Athens', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (38, 'Cyprus ', 'Nicosia', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (39, 'Switzerland ', 'Bern', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (40, 'Qatar ', 'Doha', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (41, 'Japan ', 'Tokyo', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (42, 'South Korea ', 'Seoul', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (43, 'Thailand ', 'Bangkok', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (44, 'Hong Kong ', 'Hong Kong', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (45, 'Singapore ', 'Singapore', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (46, 'Australia ', 'Canberra and Sidney', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (47, 'Brazil ', 'Brasilia', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (48, 'Jamaica ', 'Kingston', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (49, 'Uganda ', 'Kampala', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (50, 'Sudan ', 'Khartoum', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (51, 'Pakistan ', 'Islamabad', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (52, 'Russia ', 'Moscow', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (53, 'Senegal ', 'Dakar', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (54, 'Saudi Arabia ', 'Riyadh, Jeddah and Makkah', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (55, 'USA ', 'Minneapolis', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (56, 'CANADA', 'Ottawa ', 'COMING SOON….!', '', '', '', '', NULL, NULL);
        INSERT INTO `offices` VALUES (57, 'MAURITIUS', 'Port Louis ', 'COMING SOON….!', '', '', '', '', NULL, NULL);
          ";
        DB::unprepared($sql);
    }
}
