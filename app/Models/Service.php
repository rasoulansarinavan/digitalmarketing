<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  \Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submitGeneralInformation($formData, $file, $service_id)
    {

        DB::transaction(function () use ($file, $formData, $service_id) {

            $user_id = Auth::user()->id;
            $path = public_path() . '/images/services/' . $user_id;
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $extension = $file->extension();
            $image_name = 'image_services_' . $formData['title'] . '_' . '_services_' . Str::random(10) . time() . '.' . $extension;
            $path = '/images/' . $user_id . '/services/' . $image_name;
            Image::make($file)->save(public_path('images/services/' . $user_id . '/' . $image_name), 40);

            $file_id = $this->insertImageToFileTable($path);
            $formData['file'] = $file_id->toArray();

            Service::query()->updateOrCreate(
                [
                    'id' => $service_id
                ],
                [
                    'title' => $formData['title'],
                    'description' => $formData['description'],
                    'long_description' => 4,
                    'discount' => $formData['discount']
                ]
            );


            ServiceSeoItems::query()->updateOrCreate(
                [
                    'id' => $service_id
                ],
                [
                    'meta_name' => $formData['meta_name'],
                    'meta_keywords' => $formData['meta_keywords'],
                    'meta_description' => $formData['meta_description']
                ]
            );
        });
    }

    public function insertImageToFileTable($path)
    {
        return \App\Models\File::query()->updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'type' => 'service',
            ],
            [
                'file' => $path
            ]
        );

    }
}
