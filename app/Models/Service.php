<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  \Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Service extends Model
{
    use HasFactory;
    use WithFileUploads;

    protected $guarded = [];

    public function submitInfo($formData, $service_id, $file)
    {

        DB::transaction(function () use ($file, $service_id, $formData) {

            $user_id = Auth::user()->id;
            $path = public_path() . '/images/services/' . $user_id;
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $extension = $file->extension();
            $image_name = 'image_services_' . $formData['title'] . '_' . '_services_' . Str::random(10) . time() . '.' . $extension;
            $path = '/images/services/' . $user_id . '/' . $image_name;
            Image::make($file)->save(public_path('images/services/' . $user_id . '/' . $image_name), 40);

            $file_id = $this->insertImageToFileTable1($path, $service_id);
            $formData['file'] = $file_id->toArray();

            $service = Service::query()->updateOrCreate(
                [
                    'id' => $service_id
                ],
                [
                    'title' => $formData['title'],
                    'description' => $formData['description'],
                    'long_description' => $formData['long_description'],
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

    public function insertImageToFileTable1($path, $service_id)
    {
        return \App\Models\File::query()->updateOrCreate(
            [
                'file' => $path,

                'type' => 'service',
            ],
            [
                'user_id' => Auth::user()->id
            ]
        );
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\File::class, 'id');
    }
}
