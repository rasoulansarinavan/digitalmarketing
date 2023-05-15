<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KycsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kycs')->delete();
        
        \DB::table('kycs')->insert(array (
            0 => 
            array (
                'id' => 4,
                'data' => 'a:5:{s:4:"file";a:7:{s:2:"id";i:1;s:4:"file";s:95:"/images//cards/1/image_cards_Muhammed Fatih Kapucı_09904421184_idCard_4W1ATwoohk1684177779.jpg";s:4:"type";s:5:"kyc-1";s:10:"product_id";N;s:7:"user_id";i:1;s:10:"created_at";s:27:"2023-05-13T22:52:02.000000Z";s:10:"updated_at";s:27:"2023-05-15T19:09:40.000000Z";}s:4:"name";s:22:"Muhammed Fatih Kapucı";s:10:"code_melli";s:11:"27403589632";s:10:"birth_date";s:10:"1369-11-08";s:6:"mobile";s:11:"09904421184";}',
                'user_level_id' => 1,
                'user_id' => 1,
                'status_id' => 1,
                'created_at' => '2023-05-15 19:09:40',
                'updated_at' => '2023-05-15 19:25:44',
            ),
            1 => 
            array (
                'id' => 5,
                'data' => 'a:2:{s:9:"bank_card";s:16:"5022291302899594";s:5:"sheba";s:24:"940570190180012647441101";}',
                'user_level_id' => 2,
                'user_id' => 1,
                'status_id' => 1,
                'created_at' => '2023-05-15 19:22:46',
                'updated_at' => '2023-05-15 19:22:46',
            ),
        ));
        
        
    }
}