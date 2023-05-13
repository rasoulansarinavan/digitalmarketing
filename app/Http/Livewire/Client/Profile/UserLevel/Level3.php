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

//                $user_id = Auth::user()->id;
//
//        $code = activeCode($user_id);
//        $userInfo = User::query()->where('id',$user_id)->first('mobile');
//        sendActiveCode($code, $userInfo);
//        $this->verification_box = true;
//        $this->mobile = $userInfo['mobile'];
//        $this->code = $code;
    }
    public function checkSmsCode($formData, Kyc $kyc)
    {
        $validator = Validator::make($formData, [
            'code' => 'required |min:4| max:6',
        ], [
            'code.required' => 'کد الزامی است!',
            'code.max' => 'فرمت کد صحیح نیست!',
            'code.min' => 'فرمت کد صحیح نیست!',
        ]);

        $validator->validate();
        $this->resetValidation();

        if ($this->code == $formData['code']) {

            $kyc->submitlevel1($this->formData);
            return redirect()->back();

        } else {
            $this->invalidSmsCode = true;
        }


    }

    public function render()
    {
        return view('livewire.client.profile.user-level.level3')->layout('layouts.app');
    }
}
