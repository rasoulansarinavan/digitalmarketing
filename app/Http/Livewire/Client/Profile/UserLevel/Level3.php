<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Level3 extends Component
{
    use WithFileUploads;

    public $file, $serial;

    public function submitLevel3($formData, User $user)
    {
        //        sendActiveCode();
        // ActiveCode(Auth::user()->id);

        $file = $this->file;
        $validator = Validator::make($formData, [
            'file' => 'image|mimes:jpg,jpeg,png,gif|max:1024',
            'serial' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ], [
            'file.required' => 'تصویر الزامی است!',
            'file.image' => '.فایل باید یک تصویر باشد',
            'file.mimes' => 'فرمت تصویر باید یکی از فرمت های(jpg,jpeg,png,gif)باشد',
            'file.max' => '.حجم تصویر بیشتر از 1024 کیلو بایت است',
            'serial.required' => 'سریال کارت ملی الزامی است!',
        ]);


        $validator->validate();
        $this->resetValidation();
        $user->submitLevel3($formData, $file);

        $this->file = '';
        $this->serial = '';
    }


    public function render()
    {
        return view('livewire.client.profile.user-level.level3')->layout('layouts.app');
    }
}
