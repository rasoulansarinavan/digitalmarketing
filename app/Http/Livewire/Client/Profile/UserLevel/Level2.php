<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Level2 extends Component
{
    public $bank_card = '', $shaba = '';

    public function submitLevel2($formData, User $user)
    {
//        sendActiveCode();
        // ActiveCode(Auth::user()->id);

        $validator = Validator::make($formData, [
            'bank_card' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            'shaba' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
        ], [
            'bank_card.required' => 'شماره کارت بانکی الزامی است!',
            'shaba.required' => 'شماره شبا حساب الزامی است!',
        ]);

        $validator->validate();
        $this->resetValidation();
        $user->submitLevel2($formData);

        $this->bank_card = '';
        $this->shaba = '';

        function render()
        {
            return view('livewire.client.profile.user-level.level2')->layout('layouts.app');
        }
    }
}
