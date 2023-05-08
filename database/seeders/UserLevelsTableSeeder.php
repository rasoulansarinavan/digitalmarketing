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

        \DB::table('user_levels')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'سطح یک',
                    'short_description' => 'شماره ملی و کارت ملی و تاریخ تولد',
                    'long_description' => 'این حساب به عنوان حساب پیش فرض شما درنظر گرفته میشود، میتوانید از بخش تایید مدارک حساب دلخواه خود را به عنوان پیش فرض انتخاب کنید',
                    'icon' => '#wrerw',
                    'created_at' => '2023-05-07 23:36:37',
                    'updated_at' => '2023-05-07 23:36:37',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'سطح دو',
                    'short_description' => 'اطلاعات بانکی(شماره کارت و شماره شبا)',
                    'long_description' => 'در صورت عدم دسترسی به کارت ملی میتوانید از یکی از مدارک شناسایی جایگزین(کارت ملی قدیمی – شناسنامه ی جدید',
                    'icon' => '#3543',
                    'created_at' => '2023-05-07 23:37:11',
                    'updated_at' => '2023-05-07 23:37:11',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'سطح سه',
                    'short_description' => 'عکس سلفی به همراه تعهدنامه',
                    'long_description' => '(کارت ملی قدیمی – شناسنامه ی جدید – گواهینامه ی جدید- کارت پایان خدمت جدید – پاسپورت ) ',
                    'icon' => '#ertert',
                    'created_at' => '2023-05-07 23:37:34',
                    'updated_at' => '2023-05-07 23:37:34',
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'سطح چهار',
                    'short_description' => '* الزامی فقط برای رمزارز',
                    'long_description' => 'در صورت عدم دسترسی به کارت ملی میتوانید از یکی از مدارک شناسایی جایگزین(کارت ملی قدیمی – شناسنامه ی جدید – گواهینامه ی جدید- کارت پایان خدمت جدید – پاسپورت ) ',
                    'icon' => '#12321',
                    'created_at' => '2023-05-07 23:37:59',
                    'updated_at' => '2023-05-07 23:37:59',
                ),
        ));


    }
}
