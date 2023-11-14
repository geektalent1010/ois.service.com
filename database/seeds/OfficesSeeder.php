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
					INSERT INTO `offices` (`id`, `country`, `city`, `address`, `email`, `phone`, `postal`, `providedby`) VALUES
					(1, 'China', 'Shanghai', 'No.2911 North Zhongshan Road', 'shoisservices@163.com', '8616621335462', '200063', ''),
					(2, 'China', 'Beijing', 'No.16 Xin Yuan Li Street', 'oisservicesbj@163.com', '861084004549', '100027', ''),
					(3, 'China', 'Guangzhou', 'No.29 Jianshe6malu', 'oisservicesgz@163.com', '862037812021', '510060', ''),
					(4, 'Egypt', 'Cairo', '51 Elnoor Street', 'INFOCAIRO@OISSERVICES.COM', '002002376627293', '', ''),
					(5, 'France', 'Paris', '75116 PARIS', 'infoparis@oisservices.com', '33183927781', '75116', ''),
					(6, 'Germany', 'Berlin', '1 Alexander Street', 'Coming Soon', 'Coming Soon', '10178', ''),
					(7, 'India', 'New Delhi', 'Plot No.4 Institutional Area', 'INFODELHI@OISSERVICES.COM', '00918800530119', '110021', ''),
					(8, 'India', 'Bangalore', 'Brunton Road', 'INFODELHI@OISSERVICES.COM', '00918800530119', '560025', '');";

        DB::unprepared($sql);
    }
}
