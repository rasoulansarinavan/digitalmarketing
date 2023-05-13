<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\Kyc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Level3 extends Component
{
    use WithFileUploads;

    public $formData = [], $mobile, $file, $serial, $invalidSmsCode = '', $code, $verification_box = false;

    public function submitLevel3($formData, Kyc $user)
    {

        $file = $this->file;
        $validator = Validator::make($formData, [
            'file' => '',
            'serial' => 'required',
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
        $this->redirect('/profile/kyc/3');
    }


    public function render()
    {
        return view('livewire.client.profile.user-level.level3')->layout('layouts.app');
    }
}
