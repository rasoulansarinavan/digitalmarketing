<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Kyc extends Model
{
    use HasFactory;
    use WithFileUploads;

    protected $guarded = [];


    public function submitLevel1($formData, $file)
    {
        //TODO save id card

        DB::transaction(function () use ($file, $formData) {
            $extension = $file->extension();
            $image_name = 'image_cards_' . $formData['name'] . '_' . $formData['mobile'] . '_idCard_' . Str::random(10) . time() . '.' . $extension;
            Image::make($file)->save(public_path('images/cards/' . $image_name), 40);

            $file_id = $this->insertToFileTable($image_name);
            $formData['file'] = $file_id->toArray();

            Kyc::query()->updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                    'user_level_id' => 1,
                ], [
                    'data' => json_encode($formData)
                ]
            );
        });
        User::query()->where('id', Auth::user()->id)->update(['mobile' => $formData['mobile']]);
    }

    public function insertToFileTable($image_name)
    {
        return File::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'type' => 'kyc'
            ],
            [
                'file' => $image_name,
            ]
        );
    }
}
