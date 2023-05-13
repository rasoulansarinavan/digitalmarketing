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
            $path = '/images/cards/' . $image_name;
            Image::make($file)->save(public_path('images/cards/' . $image_name), 40);

            $file_id = $this->insertToFileTable($path);

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

    public function insertToFileTable($path)
    {
        return File::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'type' => 'kyc'
            ],
            [
                'file' => $path,
            ]
        );
    }

    public function submitLevel2($formData)
    {
        Kyc::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'user_level_id' => 2,
            ], [
                'data' => json_encode($formData)
            ]
        );
    }

    public function submitLevel3($formData, $file)
    {
        //TODO save id card

        DB::transaction(function () use ($file, $formData) {
            $name = Auth::user()->name;
            $mobile = Auth::user()->mobile;
            $extension = $file->extension();
            $image_name = 'image_selfie_' . $name . '_' . $mobile . '_selfie_' . Str::random(10) . time() . '.' . $extension;
            Image::make($file)->save(public_path('images/selfie/' . $image_name), 40);

            $file_id = $this->insertToFileSelfieTable11($image_name);
            $formData['file'] = $file_id->toArray();

            Kyc::query()->updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                    'user_level_id' => 3,
                ], [
                    'data' => json_encode($formData)
                ]
            );
        });
    }

    public function insertToFileSelfieTable11($image_name)
    {
        return File::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'file' => $image_name
            ],
            [
                'type' => 'kyc',
                'file' => $image_name,
            ]
        );
    }
}
