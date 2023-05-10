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
