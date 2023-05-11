<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\UserLevel;
use Couchbase\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads;

//    public $file, $name, $code_melli = '', $birth_date = '', $mobile = '';
//
//    public function submitLevel1($formData, \App\Models\User $user)
//    {
////        sendActiveCode();
//        // ActiveCode(Auth::user()->id);
//
//        $file = $this->file;
//        $validator = Validator::make($formData, [
//            'file' => 'image|mimes:jpg,jpeg,png,gif|max:1024',
//            'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
//            'code_melli' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
//            'birth_date' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
//            'mobile' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
//        ]);
//
//        dd($formData);
//
//        $validator->validate();
//        $this->resetValidation();
//        $user->submitLevel1($formData, $file);
//
//        $this->file = '';
//        $this->name = '';
//        $this->code_melli = '';
//        $this->birth_date = '';
//        $this->mobile = '';
//    }

    public $levelInfo;

    public function mount($level_id)
    {
        $this->levelInfo = UserLevel::query()->where('id', $level_id)->firstOrFail();
    }


    public function showDescription($id)
    {
        $userLevel = UserLevel::query()->where('id', $id)->first();
        $this->emit('showDescription', $userLevel);
    }


    public function render()
    {
        $levels = UserLevel::all();
        return view('livewire.client.profile.user-level.index', ['levels' => $levels])->layout('layouts.app');
    }
}
