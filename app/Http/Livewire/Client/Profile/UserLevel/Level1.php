<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Level1 extends Component
{
    use WithFileUploads;

    public $invalidSmsCode = '', $code, $name = '', $code_melli = '', $birth_date = '', $mobile, $file, $verification_box = false;

    public function submitLevel1($formData, User $user)
    {


//        sendActiveCode();
        // ActiveCode(Auth::user()->id);

        $file = $this->file;
        $validator = Validator::make($formData, [
            // 'file' => 'image|mimes:jpg,jpeg,png|max:1024',
            'name' => 'required | string | max: 30',
            'code_melli' => 'required | integer ',
            'birth_date' => 'required | max:10 | min:10',
            'mobile' => 'required | digits:11',
        ], [
            'file.required' => 'تصویر الزامی است!',
            'file.image' => '.فایل باید یک تصویر باشد',
            'file.mimes' => 'فرمت تصویر باید یکی از فرمت های(jpg,jpeg,png,gif)باشد',
            'file.max' => '.حجم تصویر بیشتر از 1024 کیلو بایت است',
            'name.required' => 'نام و نام خانوادگی الزامی است!',
            'code_melli.required' => 'کد ملی الزامی است!',
            'code_melli.integer' => 'کد ملی باید فقط شامل عدد باشد!',
            'birth_date.required' => 'تاریخ تولد الزامی است!',
            'birth_date.max' => 'فرمت تاریخ تولد صحیح نیست!',
            'birth_date.min' => 'فرمت تاریخ تولد صحیح نیست!',
            'mobile.required' => 'موبایل الزامی است!',
            'mobile.digits' => 'شماره موبایل باید 11 رفم باشد!',
        ]);
//        dd($this->file);
        $validator->validate();
        $this->resetValidation();


        $code = activeCode(Auth::user()->id);
        sendActiveCode($code, $formData['mobile']);
        $this->verification_box = true;
        $this->mobile = $formData['mobile'];
        $this->code = $code;


        //$user->submitLevel1($formData, $file);

        /* $this->file = '';
         $this->name = '';
         $this->code_melli = '';
         $this->birth_date = '';
         $this->mobile = '';*/
    }

    public function checkSmsCode($formData)
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
            dd('ok');
        } else {
            $this->invalidSmsCode = true;
        }


    }


    public function render()
    {
        return view('livewire.client.profile.user-level.level1')->layout('layouts.app');
    }
}
