<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mehrdad Dadashi',
                'email' => 'mehrdad.dadashi@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/AGNmyxZZ8FZ-vxQLzGIu3_68K8YJvPB39oa0goMenrWpXQ=s96-c',
                'mobile' => NULL,
                'user_level_id' => 0,
                'remember_token' => 'tzBDxnoSlpoSnakSKozCRpyZyLj9MM3f6b3e3CGLjoIFnh0LHEO0l2Z4q9bL',
                'created_at' => '2023-05-15 19:32:11',
                'updated_at' => '2023-05-15 19:32:11',
            ),
        ));
        
        
    }
}