<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;


    public $image, $code_melli = '', $birth_date = '', $user_id;

    public function saveUser($formData, User $user)
    {
        if ($this->user_id != null) {
            $user_id = $this->user_id;
            $validator = Validator::make($formData, [
                'code_melli' => 'required',
                'birth_date' => 'required',
                'image' => 'image|max:1024',
            ]);
        } else {
            $user_id = 0;
            $validator = Validator::make($formData, [
                'code_melli' => 'required',
                'birth_date' => 'required',
                'image' => 'image|max:1024',
            ]);
        }
        $image = $this->image;
        $validator->validate();
        $this->resetValidation();
        $user->saveUser($formData, $user_id, $image);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->code_melli = '';
        $this->birth_date = '';
        $this->image = '';
        $this->user_id = '';
    }

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
