<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  \Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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

            $user_id = Auth::user()->id;

            $path = public_path().'/images/cards/' . $user_id;
            if (! File::exists($path)) {
                File::makeDirectory($path);
            }

            $extension = $file->extension();
            $image_name = 'image_cards_' . $formData['name'] . '_' . $formData['mobile'] . '_idCard_' . Str::random(10) . time() . '.' . $extension;
            $path = '/images/' . $user_id . '/cards/' . $image_name;
            Image::make($file)->save(public_path('images/cards/'.$user_id .'/' . $image_name), 40);

            $file_id = $this->insertImageToFileTable(1, $path);

            $formData['file'] = $file_id->toArray();

            Kyc::query()->updateOrCreate(
                [
                    'user_id' => $user_id,
                    'user_level_id' => 1,
                ], [
                    'data' => serialize($formData)
                ]
            );
        });
        User::query()->where('id', Auth::user()->id)->update(['mobile' => $formData['mobile']]);
    }


    public function submitLevel2($formData)
    {
        Kyc::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'user_level_id' => 2,
            ], [
                'data' => serialize($formData)
            ]
        );
    }

    public function submitLevel3($formData, $file)
    {
        //TODO save id card

        DB::transaction(function () use ($file, $formData) {

            $user = Auth::user();
            $path = public_path().'/images/selfie/' . $user->id;
            if (! File::exists($path)) {
                File::makeDirectory($path);
            }
            $extension = $file->extension();
            $image_name = 'image_selfie_' . $user->name . '_' . $user->mobile . '_selfie_' . Str::random(10) . time() . '.' . $extension;
            $path = '/images/' . $user->id . '/selfie/' . $image_name;
            Image::make($file)->save(public_path('images/selfie/' . $image_name), 40);

            $file_id = $this->insertImageToFileTable(3, $path);

            $formData['file'] = $file_id->toArray();

            Kyc::query()->updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                    'user_level_id' => 3,
                ], [
                    'data' => serialize($formData)
                ]
            );
        });
    }

    public function insertImageToFileTable($levelId, $path)
    {
        return \App\Models\File::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'type' => 'kyc-' . $levelId,
            ],
            [
                'file' => $path
            ]
        );

    }
}
