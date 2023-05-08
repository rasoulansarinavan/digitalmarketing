<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\UserLevel;
use Livewire\Component;

class Index extends Component
{

    public function showDescription($id)
    {
        $userLevel= UserLevel::query()->where('id', $id)->first();
        $this->emit('showDescription',$userLevel);
    }

    public function render()
    {

        $levels = UserLevel::all();
        return view('livewire.client.profile.user-level.index', ['levels' => $levels])->layout('layouts.app');
    }
}
