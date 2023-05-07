<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_levels')->delete();
        
        \DB::table('user_levels')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'سطح یک',
                'description' => 'شماره ملی و کارت ملی و تاریخ تولد',
                'icon' => '#546456',
                'created_at' => '2023-05-07 21:17:31',
                'updated_at' => '2023-05-07 21:17:31',
            ),
            1 => 
            array (
                'id' => 6,
                'title' => 'سطح دو',
            'description' => 'اطلاعات بانکی(شماره کارت و شماره شبا)',
                'icon' => '#5766576',
                'created_at' => '2023-05-07 21:17:47',
                'updated_at' => '2023-05-07 21:17:47',
            ),
            2 => 
            array (
                'id' => 7,
                'title' => 'سطح سه',
                'description' => 'عکس سلفی به همراه تعهدنامه',
                'icon' => '#676678',
                'created_at' => '2023-05-07 21:18:01',
                'updated_at' => '2023-05-07 21:18:01',
            ),
        ));
        
        
    }
}