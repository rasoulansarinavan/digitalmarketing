<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\Kyc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Level2 extends Component
{
    public $bank_card = '', $sheba = '', $invalidSmsCode = '', $mobile, $code, $verification_box = false;


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
        $this->redirect('/profile/kyc/2');
    }


    function render()
    {
        return view('livewire.client.profile.user-level.level2')->layout('layouts.app');
    }

}
