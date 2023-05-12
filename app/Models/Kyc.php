<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Kyc extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submitLevel1($formData)
    {
        //TODO save id card

        Kyc::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'user_level_id' => 1,

            ], [
                'data' => json_encode($formData)
            ]
        );

        User::query()->where('id', Auth::user()->id)->update(['mobile' => $formData['mobile']]);

    }
}
