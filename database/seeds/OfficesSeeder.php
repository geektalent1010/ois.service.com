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
					INSERT INTO `offices` (`id`, `country`, `city`, `address`, `postal`, `phone`, `email`, `providedby`) VALUES
					(1, 'INDIA', 'NEW DELHI', 'C/O Central Board of Irrigation and Power, Plot No.4, Institutional Area, Malcha Marg, Chanakyapuri', '110021', '0091 8800530119', 'INFODELHI@OISSERVICES.CO', 'IBRAHIM'),
					(2, 'INDIA', 'BANGALORE', 'No. 14/2, Rajesh Chambers, Brunton Road, Ashok Nagar, MG Road, Craig Park Layout', '560025', '0091 8800530119', 'INFODELHI@OISSERVICES.CO', 'IBRAHIM'),
					(3, 'Egypt', 'Cairo', '2nd Floor at 51 - Elnoor Street, Eldoki, Giza', '', '002002376627293', 'INFOCAIRO@OISSERVICES.CO', 'IBRAHIM'),
					(4, 'LEBANON', 'BEIRUT', 'JNAH FACING RAFIC HARIRI HOSPITAL,MAIS 6 BLDG ,3RD FLOOR,APT12', '', '+9611845138', 'infobeirut@oisservices.com', 'MIRNA SIBAI'),
					(5, 'TURKEY', 'ANKARA', 'Ugur Mumcu\'nun Sokagı, Büyükesat Mahallesi, No:49/3 Gazisomanpara Cankaya/Ankara', '6680', '(0312) 4382175', 'infoankara@oisservices.com', 'İlhan Polat'),
					(6, 'FRANCE', 'PARIS', '9 RUE PAUL VALERY, GROUND FLOOR,75116 PARIS, FRANCE.', '75116', '33183927781', 'infoparis@oisservices.com', 'Clement'),
					(7, 'SOUTH AFRICA', 'JOHANNESBURG', 'No. 6 Bolton road, Rosebank, Johannesburg', '2193', '27112682470', 'infojoburg@oisservices.com', 'Emmanuel'),
					(8, 'SOUTH AFRICA', 'CAPETOWN', 'No. 50 Long Street, Capetown', '7806', '27210133161', 'infocpt@oisservices.com', 'Emmanuel'),
					(9, 'UNITED ARAB EMIRATES', 'DUBAI', 'Jumeirah Lakes Towers, Cluster I, Silver Tower, Office 22A, 22nd floor, Dubai, United Arab Emirates', 'PO BOX 73049', '97142765448', 'infodubai@oisservices.com', 'Abba'),
					(10, 'UNITED KINGDOM', 'LONDON', '56-57 Fleet Street, London, United Kindom', 'EC4Y 1JU', '2078320000', 'info@oisservices.com', 'Roy'),
					(11, 'NETHERLANDS', 'THE HAGUE', 'The First Floor, Regus Building, Koningin Juliana Plein 10, The Hague Central station, Netherlands', '2595 AA', '0031 7089 15324', 'infothehague@oisservices.com', 'David'),
					(12, 'CHINA', 'SHANGHAI', 'Room 506A, Zhongguancun Science Building, No.2911 North Zhongshan Road, Putuo District, Shanghai, China', '200063', '0086 16621335462', 'shoisservices@163.com', 'Lily'),
					(13, 'CHINA', 'BEIJING', 'Suite 908 Unit B Kun Sha Building, No.16 Xin Yuan Li Street, Chaoyang District, Beijing, P.R.China', '100027', '8610 84004549', 'oisservicesbj@163.com', 'Lily'),
					(14, 'CHINA', 'GUANGZHOU', 'Room 8E， 8th floor，Wingkin Square, No.29 Jianshe6malu, Yuexiu District, Guangzhou, Guangdong, China', '510060', '8620 37812021', 'oisservicesgz@163.com', 'Lily'),
					(15, 'United States', 'Washington DC', '11900 Parklawn Drive Ste 160 Rockville MD', '20852', '+ 1 301-231-7000', 'infowashiingtondc@oisservices.com', 'Jerry'),
					(16, 'United States', 'New York', '370 Lexington Avenue Ste 613, New York NY', '10017', '+ 1 917-900-1114', 'infony@oisservices.com', 'Jerry'),
					(17, 'United States', 'Atlanta', '918 Holcomb Bridge Rd Ste 204, Roswell GA', '30076', '+ 1 404-695-6373', 'infoatlanta@oisservices.com', 'Jerry'),
					(18, 'United States', 'Los Angeles', '5757 West Century Blvd Ste 718, Los Angeles CA', '90045', '+ 1 301-231-7000', 'infola@oisservices.com', 'Jerry'),
					(19, 'United States', 'Houston', '9894 Bissonnet Street Ste 745, Houston TX', '77036', '+ 1 713-771-1871', 'infohouston@oisservices.com', 'Jerry'),
					(20, 'Germany', 'Berlin', '1 Alexander Street', '10178', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
					(21, 'Spain', 'Madrid', 'Maudes, 62', '28003', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
					(22, 'Italy', 'Roma', 'Via Sicilia, 30', '187', '390642012121', 'inforome@oisservices.com', 'Rabih Nakad');
          ";
        DB::unprepared($sql);
    }
}