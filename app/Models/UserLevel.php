<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
