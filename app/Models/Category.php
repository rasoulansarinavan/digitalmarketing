<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveCategory($formData, $cat_id)
    {
        Category::query()->updateOrCreate(
            [
                'id' => $cat_id
            ],
            [
                'title' => $formData['title'],
                'category_id' => $formData['category_id'],
                'icon' => $formData['icon']
            ]
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
