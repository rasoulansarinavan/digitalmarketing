<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'ویزا، مسترکارت',
                'category_id' => 0,
                'icon' => '#43543',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'گیفت کارت ها',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'پرداخت در سایت های خارجی',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'خرید کالا و تحویل در ایران',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'پی پال ، اسکریل و پرفکت مانی',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
            'title' => 'رمز ارز (بیت کوین، تتر و ...)',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'سرویس‌هار',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'سریال نامبر بازی و نرم افزار',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'title' => 'پیگیری سفارشات',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'title' => 'پشتیبانی',
                'category_id' => 0,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'title' => 'ویزا، مسترکارت فیزیکی',
                'category_id' => 1,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'title' => 'شارژ کارت‌ها',
                'category_id' => 1,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'title' => 'کارت‌های مجازی',
                'category_id' => 1,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'title' => 'تمام محصولات',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'title' => 'سایت‌های بین المللی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'title' => 'خدمات سرور مجازی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'title' => 'خدمات هوش مصنوعی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'title' => 'پرداخت اکانت‌های بین المللی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'title' => 'خدمات سفر',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'title' => 'دانشجویی و آزمون‌ بین المللی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'title' => 'ووچر آزمون',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'title' => 'ابزارهای سئو',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'title' => 'اکانت تریدینگ ویو',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'title' => 'اکانت لینکدین',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'title' => 'اکانت پلی استیشن پلاس',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'title' => 'شماره و شارژ اکانت اسکایپ',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'title' => 'دیگر سایت‌های بین المللی',
                'category_id' => 3,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'title' => 'انگلیس',
                'category_id' => 4,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'title' => 'امارات',
                'category_id' => 4,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'title' => 'ترکیه',
                'category_id' => 4,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'title' => 'ایتالیا',
                'category_id' => 4,
                'icon' => '#4354423',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'title' => 'خرید و فروش',
                'category_id' => 6,
                'icon' => '#0909090',
                'created_at' => '2023-05-07 17:22:41',
                'updated_at' => '2023-05-07 17:22:41',
            ),
            32 =>
            array (
                'id' => 33,
                'title' => 'کیف پول سخت افزاری',
                'category_id' => 6,
                'icon' => '#5675675',
                'created_at' => '2023-05-07 17:23:05',
                'updated_at' => '2023-05-07 17:23:05',
            ),
            33 =>
            array (
                'id' => 34,
                'title' => 'خدمات اکانت پی پال',
                'category_id' => 7,
                'icon' => '#456456456',
                'created_at' => '2023-05-07 17:42:10',
                'updated_at' => '2023-05-07 17:42:10',
            ),
            34 =>
            array (
                'id' => 35,
                'title' => 'سرور مجازی',
                'category_id' => 7,
                'icon' => '#5445645',
                'created_at' => '2023-05-07 17:42:28',
                'updated_at' => '2023-05-07 17:42:28',
            ),
            35 =>
            array (
                'id' => 36,
                'title' => 'ساخت اکانت سایت‌های مختلف',
                'category_id' => 7,
                'icon' => '#5464456',
                'created_at' => '2023-05-07 17:42:41',
                'updated_at' => '2023-05-07 17:42:41',
            ),
            36 =>
            array (
                'id' => 37,
            'title' => 'اکانت‌های ترایال (Trial)',
                'category_id' => 7,
                'icon' => '#45456456',
                'created_at' => '2023-05-07 17:42:57',
                'updated_at' => '2023-05-07 17:42:57',
            ),
            37 =>
            array (
                'id' => 38,
                'title' => 'کیف پول سخت افزاری',
                'category_id' => 7,
                'icon' => '#54774554',
                'created_at' => '2023-05-07 17:43:08',
                'updated_at' => '2023-05-07 17:43:08',
            ),
            38 =>
            array (
                'id' => 39,
                'title' => 'سیم کارت‌های بین المللی',
                'category_id' => 7,
                'icon' => '#67575675',
                'created_at' => '2023-05-07 17:43:20',
                'updated_at' => '2023-05-07 17:43:20',
            ),
            39 =>
            array (
                'id' => 40,
                'title' => 'شماره مجازی',
                'category_id' => 7,
                'icon' => '#76678678',
                'created_at' => '2023-05-07 17:43:32',
                'updated_at' => '2023-05-07 17:43:32',
            ),
            40 =>
            array (
                'id' => 41,
                'title' => 'ووچر آزمون',
                'category_id' => 6,
                'icon' => '#789789789',
                'created_at' => '2023-05-07 17:43:43',
                'updated_at' => '2023-05-07 17:43:43',
            ),
        ));


    }
}
