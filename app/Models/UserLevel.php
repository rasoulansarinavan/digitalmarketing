<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserLevel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveUserLevel($formData, $level_id)
    {
        UserLevel::query()->updateOrCreate(
            [
                'id' => $level_id
            ],
            [
                'title' => $formData['title'],
                'short_description' => $formData['short_description'],
                'long_description' => $formData['long_description'],
                'icon' => $formData['icon']
            ]
        );
    }

    public function userLevel()
    {
        return $this->belongsTo(Kyc::class, 'id', 'user_level_id')->where('user_id', Auth::user()->id);

    }

}
