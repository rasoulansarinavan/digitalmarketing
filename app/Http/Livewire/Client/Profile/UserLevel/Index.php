<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\Kyc;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    use WithFileUploads;


    public $levelInfo, $checkKyc = false;

    public function mount($level_id)
    {
        $checkKyc = Kyc::query()->where([
            'user_id' => Auth::user()->id,
            'status_id' => 1
        ])->exists();
        if ($checkKyc) {
            $this->checkKyc = true;
        }

        $this->levelInfo = UserLevel::query()->where('id', $level_id)->firstOrFail();
    }


    public function showDescription($id)
    {
        $userLevel = UserLevel::query()->where('id', $id)->first();
        $this->emit('showDescription', $userLevel);
    }


    public function render()
    {
        $levels = UserLevel::with('userLevel')->get();
      /*  dd($levels);*/
        return view('livewire.client.profile.user-level.index', ['levels' => $levels])->layout('layouts.app');
    }
}
