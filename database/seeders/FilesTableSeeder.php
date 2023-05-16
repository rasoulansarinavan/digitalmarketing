<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('files')->delete();
        
        \DB::table('files')->insert(array (
            0 => 
            array (
                'id' => 19,
                'file' => 'images/services/1/image_services_دبیت کارت__services_zDxrgLTGOX1684257572.jpg',
                'type' => 'service',
                'service_id' => 19,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:19:32',
                'updated_at' => '2023-05-16 17:19:32',
            ),
            1 => 
            array (
                'id' => 20,
                'file' => 'images/services/1/image_services_کردیت کارت__services_hpDJ8NCjqO1684257795.jpg',
                'type' => 'service',
                'service_id' => 20,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:23:15',
                'updated_at' => '2023-05-16 17:23:15',
            ),
            2 => 
            array (
                'id' => 21,
                'file' => 'images/services/1/image_services_مسترکارت پرسونال__services_3V1CoAT9aD1684257895.jpg',
                'type' => 'service',
                'service_id' => 21,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:24:55',
                'updated_at' => '2023-05-16 17:24:55',
            ),
            3 => 
            array (
                'id' => 22,
                'file' => 'images/services/1/image_services_مستر کارت دبیت ویوا__services_TOLq0XnyCw1684257965.jpg',
                'type' => 'service',
                'service_id' => 22,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:26:05',
                'updated_at' => '2023-05-16 17:26:05',
            ),
            4 => 
            array (
                'id' => 23,
                'file' => 'images/services/1/image_services_شارژ دلاری کارت های فیزیکی__services_yFZHWqSGCm1684258022.jpg',
                'type' => 'service',
                'service_id' => 23,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:27:02',
                'updated_at' => '2023-05-16 17:27:02',
            ),
            5 => 
            array (
                'id' => 24,
                'file' => 'images/services/1/image_services_شارژ مستر کارت پرسونال__services_TJ6yq7yFXp1684258135.jpg',
                'type' => 'service',
                'service_id' => 24,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:28:55',
                'updated_at' => '2023-05-16 17:28:55',
            ),
            6 => 
            array (
                'id' => 25,
                'file' => 'images/services/1/image_services_شارژ مستر کارت پرایم__services_Iwkqa68cHo1684258323.jpg',
                'type' => 'service',
                'service_id' => 25,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:32:03',
                'updated_at' => '2023-05-16 17:32:03',
            ),
            7 => 
            array (
                'id' => 26,
                'file' => 'images/services/1/image_services_شارژ ویزا کارت__services_DyGMGjKsIb1684258382.jpg',
                'type' => 'service',
                'service_id' => 26,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:33:02',
                'updated_at' => '2023-05-16 17:33:02',
            ),
            8 => 
            array (
                'id' => 27,
                'file' => 'images/services/1/image_services_شارژ لیری کارت های فیزیکی__services_NJNKbTqx2e1684258459.jpg',
                'type' => 'service',
                'service_id' => 27,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:34:19',
                'updated_at' => '2023-05-16 17:34:19',
            ),
            9 => 
            array (
                'id' => 28,
                'file' => 'images/services/1/image_services_Skype__services_xes13J7oBJ1684259244.jpg',
                'type' => 'service',
                'service_id' => 28,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:47:25',
                'updated_at' => '2023-05-16 17:47:25',
            ),
            10 => 
            array (
                'id' => 29,
                'file' => 'images/services/1/image_services_Netflix__services_9Vq9var8m11684259294.jpg',
                'type' => 'service',
                'service_id' => 29,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:48:14',
                'updated_at' => '2023-05-16 17:48:14',
            ),
            11 => 
            array (
                'id' => 30,
                'file' => 'images/services/1/image_services_Spotify__services_kqMTEQugRH1684259336.jpg',
                'type' => 'service',
                'service_id' => 30,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:48:56',
                'updated_at' => '2023-05-16 17:48:56',
            ),
            12 => 
            array (
                'id' => 31,
                'file' => 'images/services/1/image_services_Amazon__services_aswzffGShb1684259378.jpg',
                'type' => 'service',
                'service_id' => 31,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:49:38',
                'updated_at' => '2023-05-16 17:49:38',
            ),
            13 => 
            array (
                'id' => 32,
                'file' => 'images/services/1/image_services_Apple__services_1dzVN4Lx031684259414.jpg',
                'type' => 'service',
                'service_id' => 32,
                'user_id' => 1,
                'created_at' => '2023-05-16 17:50:14',
                'updated_at' => '2023-05-16 17:50:14',
            ),
            14 => 
            array (
                'id' => 33,
                'file' => 'images/services/1/image_services_پرداخت در کلیه سایت های بین المللی__services_XVZVIJKQcQ1684261015.jpg',
                'type' => 'service',
                'service_id' => 33,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:16:55',
                'updated_at' => '2023-05-16 18:16:55',
            ),
            15 => 
            array (
                'id' => 34,
                'file' => 'images/services/1/image_services_پرداخت سایت HETZNER__services_EYWi0JasRX1684261105.jpg',
                'type' => 'service',
                'service_id' => 34,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:18:25',
                'updated_at' => '2023-05-16 18:18:25',
            ),
            16 => 
            array (
                'id' => 35,
                'file' => 'images/services/1/image_services_ساخت اکانت LightNode__services_CEkLDhyvbt1684261183.jpg',
                'type' => 'service',
                'service_id' => 35,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:19:43',
                'updated_at' => '2023-05-16 18:19:43',
            ),
            17 => 
            array (
                'id' => 36,
                'file' => 'images/services/1/image_services_پرداخت اکانت OpenAi__services_Y2uLlQQt5y1684261241.jpg',
                'type' => 'service',
                'service_id' => 36,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:20:41',
                'updated_at' => '2023-05-16 18:20:41',
            ),
            18 => 
            array (
                'id' => 37,
                'file' => 'images/services/1/image_services_پرداخت اکانت midjourney__services_05rrvwBWXw1684261320.jpg',
                'type' => 'service',
                'service_id' => 37,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:22:00',
                'updated_at' => '2023-05-16 18:22:00',
            ),
            19 => 
            array (
                'id' => 38,
                'file' => 'images/services/1/image_services_Twitter Blue__services_LBl72a98Bm1684261386.jpg',
                'type' => 'service',
                'service_id' => 38,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:23:06',
                'updated_at' => '2023-05-16 18:23:06',
            ),
            20 => 
            array (
                'id' => 39,
                'file' => 'images/services/1/image_services_اکانت Gold XBOX__services_LxCEqAqZls1684261461.jpg',
                'type' => 'service',
                'service_id' => 39,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:24:21',
                'updated_at' => '2023-05-16 18:24:21',
            ),
            21 => 
            array (
                'id' => 40,
                'file' => 'images/services/1/image_services_اکانت IMDB__services_IAnEMLIEWf1684261560.jpg',
                'type' => 'service',
                'service_id' => 40,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:26:00',
                'updated_at' => '2023-05-16 18:26:00',
            ),
            22 => 
            array (
                'id' => 41,
                'file' => 'images/services/1/image_services_اکانت HBO__services_d003eWQ1871684261643.jpg',
                'type' => 'service',
                'service_id' => 41,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:27:23',
                'updated_at' => '2023-05-16 18:27:23',
            ),
            23 => 
            array (
                'id' => 42,
                'file' => 'images/services/1/image_services_بلیط قطار__services_tr6XG6uPwY1684261723.jpg',
                'type' => 'service',
                'service_id' => 42,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:28:44',
                'updated_at' => '2023-05-16 18:28:44',
            ),
            24 => 
            array (
                'id' => 43,
                'file' => 'images/services/1/image_services_رزرو هتل بین المللی__services_iuspUMU9Vp1684261795.jpg',
                'type' => 'service',
                'service_id' => 43,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:29:55',
                'updated_at' => '2023-05-16 18:29:55',
            ),
            25 => 
            array (
                'id' => 44,
                'file' => 'images/services/1/image_services_پرداخت هزینه ویزا و سفارت__services_khdv9Va5pP1684261830.jpg',
                'type' => 'service',
                'service_id' => 44,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:30:30',
                'updated_at' => '2023-05-16 18:30:30',
            ),
            26 => 
            array (
                'id' => 45,
                'file' => 'images/services/1/image_services_آزمون Duolingo__services_oFKB8qlRx91684261924.jpg',
                'type' => 'service',
                'service_id' => 45,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:32:04',
                'updated_at' => '2023-05-16 18:32:04',
            ),
            27 => 
            array (
                'id' => 46,
                'file' => 'images/services/1/image_services_آزمون TOEFL__services_BJxo0iSuTj1684261965.jpg',
                'type' => 'service',
                'service_id' => 46,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:32:45',
                'updated_at' => '2023-05-16 18:32:45',
            ),
            28 => 
            array (
                'id' => 47,
                'file' => 'images/services/1/image_services_آزمون IELTS__services_2Ret73iU731684262029.jpg',
                'type' => 'service',
                'service_id' => 47,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:33:49',
                'updated_at' => '2023-05-16 18:33:49',
            ),
            29 => 
            array (
                'id' => 48,
                'file' => 'images/services/1/image_services_ووچر آزمون PTE__services_oeddiaC4Yv1684262097.jpg',
                'type' => 'service',
                'service_id' => 48,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:34:57',
                'updated_at' => '2023-05-16 18:34:57',
            ),
            30 => 
            array (
                'id' => 49,
                'file' => 'images/services/1/image_services_اکانت mailerlite__services_Q1G8GH9xar1684262222.jpg',
                'type' => 'service',
                'service_id' => 49,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:37:02',
                'updated_at' => '2023-05-16 18:37:02',
            ),
            31 => 
            array (
                'id' => 50,
                'file' => 'images/services/1/image_services_خرید اکانت WooRank__services_K1N5vWyzGG1684262273.jpg',
                'type' => 'service',
                'service_id' => 50,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:37:53',
                'updated_at' => '2023-05-16 18:37:53',
            ),
            32 => 
            array (
                'id' => 51,
                'file' => 'images/services/1/image_services_اکانت سه ماهه TradingView Premium__services_CnNPf1y9qu1684262351.jpg',
                'type' => 'service',
                'service_id' => 51,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:39:11',
                'updated_at' => '2023-05-16 18:39:11',
            ),
            33 => 
            array (
                'id' => 52,
                'file' => 'images/services/1/image_services_اکانت لینکدین Recruiter Lite __services_lEbq8HhTS81684262433.jpg',
                'type' => 'service',
                'service_id' => 52,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:40:33',
                'updated_at' => '2023-05-16 18:40:33',
            ),
            34 => 
            array (
                'id' => 53,
                'file' => 'images/services/1/image_services_اکانت یکساله PlayStation Plus Premium__services_26lzUKW9TU1684262496.jpg',
                'type' => 'service',
                'service_id' => 53,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:41:36',
                'updated_at' => '2023-05-16 18:41:36',
            ),
            35 => 
            array (
                'id' => 54,
                'file' => 'images/services/1/image_services_شارژ 25 دلاری اکانت Skype__services_1BjCuF4c6h1684262556.jpg',
                'type' => 'service',
                'service_id' => 54,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:42:36',
                'updated_at' => '2023-05-16 18:42:36',
            ),
            36 => 
            array (
                'id' => 55,
                'file' => 'images/services/1/image_services_پرداخت در دیگر سایت های بین المللی__services_xaZQPpaPAE1684262631.jpg',
                'type' => 'service',
                'service_id' => 55,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:43:51',
                'updated_at' => '2023-05-16 18:43:51',
            ),
            37 => 
            array (
                'id' => 56,
                'file' => 'images/services/1/image_services_آدیداس انگلیس__services_RC9S4ngTjl1684262836.jpg',
                'type' => 'service',
                'service_id' => 56,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:47:16',
                'updated_at' => '2023-05-16 18:47:16',
            ),
            38 => 
            array (
                'id' => 57,
                'file' => 'images/services/1/image_services_زارا انگلیس__services_s2PxXb9t1f1684262878.jpg',
                'type' => 'service',
                'service_id' => 57,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:47:58',
                'updated_at' => '2023-05-16 18:47:58',
            ),
            39 => 
            array (
                'id' => 58,
                'file' => 'images/services/1/image_services_نون__services_34ELa4rlu31684262930.jpg',
                'type' => 'service',
                'service_id' => 58,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:48:50',
                'updated_at' => '2023-05-16 18:48:50',
            ),
            40 => 
            array (
                'id' => 59,
                'file' => 'images/services/1/image_services_ترندیول ترکیه__services_ZEKVVhN8ay1684262964.jpg',
                'type' => 'service',
                'service_id' => 59,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:49:24',
                'updated_at' => '2023-05-16 18:49:24',
            ),
            41 => 
            array (
                'id' => 60,
                'file' => 'images/services/1/image_services_ال سی وایکیکی ترکیه__services_PA7Y6lfdwO1684263004.jpg',
                'type' => 'service',
                'service_id' => 60,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:50:04',
                'updated_at' => '2023-05-16 18:50:04',
            ),
            42 => 
            array (
                'id' => 61,
                'file' => 'images/services/1/image_services_یونی یورو__services_HVSMmrM4Iz1684263056.jpg',
                'type' => 'service',
                'service_id' => 61,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:50:56',
                'updated_at' => '2023-05-16 18:50:56',
            ),
            43 => 
            array (
                'id' => 62,
                'file' => 'images/services/1/image_services_زلاندو__services_VKlyByOv5H1684263095.jpg',
                'type' => 'service',
                'service_id' => 62,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:51:35',
                'updated_at' => '2023-05-16 18:51:35',
            ),
            44 => 
            array (
                'id' => 63,
            'file' => 'images/services/1/image_services_خرید(شارژ) پی پال از ایرانیکارت__services_dQD8URIKZ41684263299.jpg',
                'type' => 'service',
                'service_id' => 63,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:54:59',
                'updated_at' => '2023-05-16 18:54:59',
            ),
            45 => 
            array (
                'id' => 64,
                'file' => 'images/services/1/image_services_خرید ووچر پرفکت مانی__services_NGEvPZqjsq1684263356.jpg',
                'type' => 'service',
                'service_id' => 64,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:55:56',
                'updated_at' => '2023-05-16 18:55:56',
            ),
            46 => 
            array (
                'id' => 65,
                'file' => 'images/services/1/image_services_خرید Payeer از ایرانیکارت__services_iaHxLcVTtw1684263429.jpg',
                'type' => 'service',
                'service_id' => 65,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:57:10',
                'updated_at' => '2023-05-16 18:57:10',
            ),
            47 => 
            array (
                'id' => 66,
                'file' => 'images/services/1/image_services_Uniswap__services_XrZ6CzWj541684263562.png',
                'type' => 'service',
                'service_id' => 66,
                'user_id' => 1,
                'created_at' => '2023-05-16 18:59:22',
                'updated_at' => '2023-05-16 18:59:22',
            ),
            48 => 
            array (
                'id' => 67,
                'file' => 'images/services/1/image_services_سرکلیدی بیت کوین__services_xCHMpaGxkf1684263618.jpg',
                'type' => 'service',
                'service_id' => 67,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:00:18',
                'updated_at' => '2023-05-16 19:00:18',
            ),
            49 => 
            array (
                'id' => 68,
                'file' => 'images/services/1/image_services_Ledger Nano S رنگی فرانسه__services_EHsSzBzAWw1684263679.jpg',
                'type' => 'service',
                'service_id' => 68,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:01:19',
                'updated_at' => '2023-05-16 19:01:19',
            ),
            50 => 
            array (
                'id' => 69,
            'file' => 'images/services/1/image_services_افتتاح اکانت پی پال بیزینس (Sole Trader)__services_iiwuQ2Jmk71684263804.jpg',
                'type' => 'service',
                'service_id' => 69,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:03:24',
                'updated_at' => '2023-05-16 19:03:24',
            ),
            51 => 
            array (
                'id' => 70,
                'file' => 'images/services/1/image_services_خرید یا تمدید سرور مجازی یک ساله__services_dCYtltVXOP1684264807.jpg',
                'type' => 'service',
                'service_id' => 70,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:20:07',
                'updated_at' => '2023-05-16 19:20:07',
            ),
            52 => 
            array (
                'id' => 71,
                'file' => 'images/services/1/image_services_اکانت دولوپر گوگل + VPS + سیم‌کارت__services_uXAg5n5ne61684264873.jpg',
                'type' => 'service',
                'service_id' => 71,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:21:13',
                'updated_at' => '2023-05-16 19:21:13',
            ),
            53 => 
            array (
                'id' => 72,
                'file' => 'images/services/1/image_services_اکانت ترایال یک ماهه Tidal__services_9EMmdqrHIj1684264919.jpg',
                'type' => 'service',
                'service_id' => 72,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:21:59',
                'updated_at' => '2023-05-16 19:21:59',
            ),
            54 => 
            array (
                'id' => 73,
                'file' => 'images/services/1/image_services_سیم کارت Eety اتریش__services_8LkEFs3FJW1684264995.jpg',
                'type' => 'service',
                'service_id' => 73,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:23:15',
                'updated_at' => '2023-05-16 19:23:15',
            ),
            55 => 
            array (
                'id' => 74,
                'file' => 'images/services/1/image_services_شماره مجازی امریکا__services_jAkiyVcb8P1684265050.jpg',
                'type' => 'service',
                'service_id' => 74,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:24:10',
                'updated_at' => '2023-05-16 19:24:10',
            ),
            56 => 
            array (
                'id' => 75,
                'file' => 'images/services/1/image_services_Gauntlet__services_3ac0pSA7161684265202.jpg',
                'type' => 'service',
                'service_id' => 75,
                'user_id' => 1,
                'created_at' => '2023-05-16 19:26:42',
                'updated_at' => '2023-05-16 19:26:42',
            ),
        ));
        
        
    }
}