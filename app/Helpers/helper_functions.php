<?php

use App\Models\User;
use Ghasedak\GhasedakApi;

function activeCode($user_id)
{

    //dd($code);
    do {
        $randomCode = rand(1000, 100000);
        $code = \App\Models\ActiveCode::query()->create([
            'code' => $randomCode,
            'user_id' => $user_id,
        ]);
        $checkCode = \App\Models\ActiveCode::query()->where('code', $randomCode)->first();
    } while (!$checkCode);

    return $code->code;

}

function sendActiveCode($code,$userMobile)
{

    $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
    $api->Verify(
        "$userMobile",  // receptor
        'smsVerification', // 1 for text message and 2 for voice message
        "$code",  // name of the template which you've created in you account
               // parameters (supporting up to 10 parameters)
    );
}

