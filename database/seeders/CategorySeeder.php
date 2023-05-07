<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'ویزا، مسترکارت',
                    'category_id' => 0,
                    'icon' => '#43543',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'گیفت کارت ها',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'پرداخت در سایت های خارجی',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'خرید کالا و تحویل در ایران',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'پی پال ، اسکریل و پرفکت مانی',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'رمز ارز (بیت کوین، تتر و ...)',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            6 =>
                array(
                    'id' => 7,
                    'title' => 'سرویس‌هار',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            7 =>
                array(
                    'id' => 8,
                    'title' => 'سریال نامبر بازی و نرم افزار',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            8 =>
                array(
                    'id' => 9,
                    'title' => 'پیگیری سفارشات',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            9 =>
                array(
                    'id' => 10,
                    'title' => 'پشتیبانی',
                    'category_id' => 0,
                    'icon' => '#4354423',
                ),
            10 =>
                array(
                    'id' => 11,
                    'title' => 'ویزا، مسترکارت فیزیکی',
                    'category_id' => 1,
                    'icon' => '#4354423',
                ),
            11 =>
                array(
                    'id' => 12,
                    'title' => 'شارژ کارت‌ها',
                    'category_id' => 1,
                    'icon' => '#4354423',
                ),
            12 =>
                array(
                    'id' => 13,
                    'title' => 'کارت‌های مجازی',
                    'category_id' => 1,
                    'icon' => '#4354423',
                ),
            13 =>
                array(
                    'id' => 14,
                    'title' => 'تمام محصولات',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            14 =>
                array(
                    'id' => 15,
                    'title' => 'سایت‌های بین المللی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            15 =>
                array(
                    'id' => 16,
                    'title' => 'خدمات سرور مجازی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            16 =>
                array(
                    'id' => 17,
                    'title' => 'خدمات هوش مصنوعی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            17 =>
                array(
                    'id' => 18,
                    'title' => 'پرداخت اکانت‌های بین المللی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            18 =>
                array(
                    'id' => 19,
                    'title' => 'خدمات سفر',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            19 =>
                array(
                    'id' => 20,
                    'title' => 'دانشجویی و آزمون‌ بین المللی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            20 =>
                array(
                    'id' => 21,
                    'title' => 'ووچر آزمون',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            21 =>
                array(
                    'id' => 22,
                    'title' => 'ابزارهای سئو',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            22 =>
                array(
                    'id' => 23,
                    'title' => 'اکانت تریدینگ ویو',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            23 =>
                array(
                    'id' => 24,
                    'title' => 'اکانت لینکدین',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            24 =>
                array(
                    'id' => 25,
                    'title' => 'اکانت پلی استیشن پلاس',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            25 =>
                array(
                    'id' => 26,
                    'title' => 'شماره و شارژ اکانت اسکایپ',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            26 =>
                array(
                    'id' => 27,
                    'title' => 'دیگر سایت‌های بین المللی',
                    'category_id' => 3,
                    'icon' => '#4354423',
                ),
            27 =>
                array(
                    'id' => 28,
                    'title' => 'انگلیس',
                    'category_id' => 4,
                    'icon' => '#4354423',
                ),
            28 =>
                array(
                    'id' => 29,
                    'title' => 'امارات',
                    'category_id' => 4,
                    'icon' => '#4354423',
                ),
            29 =>
                array(
                    'id' => 30,
                    'title' => 'ترکیه',
                    'category_id' => 4,
                    'icon' => '#4354423',
                ),
            30 =>
                array(
                    'id' => 31,
                    'title' => 'ایتالیا',
                    'category_id' => 4,
                    'icon' => '#4354423',
                )
        ));
    }
}
