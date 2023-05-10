<?php

use App\Models\User;

function activeCode($user_id)
{

    //dd($code);
    do {
        $randomCode = rand(1000, 1000000);
        $code = \App\Models\ActiveCode::query()->create([
            'code' => $randomCode,
            'user_id' => $user_id,
        ]);
        $checkCode = \App\Models\ActiveCode::query()->where('code', $randomCode)->first();
    } while (!$checkCode);

    return $code;

}

function sendActiveCode()
{
    $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
    $api->Verify(
        "09904421184",  // receptor
        'smsVerification',              // 1 for text message and 2 for voice message
        "param1",  // name of the template which you've created in you account
               // parameters (supporting up to 10 parameters)
    );
}

