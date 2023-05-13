<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\Kyc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Level2 extends Component
{
    public $bank_card = '', $sheba = '', $invalidSmsCode = '',$mobile, $code, $verification_box = false;


    public function submitLevel2($formData, Kyc $user)
    {

        $validator = Validator::make($formData, [
            'bank_card' => 'required |digits:16',
            'sheba' => 'required |digits:24',
        ], [
            'bank_card.required' => 'شماره کارت بانکی الزامی است!',
            'bank_card.digits' => 'تعداد کاراکتر های وارد شده دزست نیست!',
            'sheba.required' => 'شماره شبا حساب الزامی است!',
            'sheba.digits' => 'تعداد کاراکتر های وارد شده دزست نیست!',
        ]);

        $validator->validate();
        $this->resetValidation();
        $user->submitLevel2($formData);
//        $user_id = Auth::user()->id;

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

    function render()
    {
        return view('livewire.client.profile.user-level.level2')->layout('layouts.app');
    }

}
