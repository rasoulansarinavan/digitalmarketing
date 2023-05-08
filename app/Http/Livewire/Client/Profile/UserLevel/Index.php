<?php

namespace App\Http\Livewire\Client\Profile\UserLevel;

use App\Models\UserLevel;
use Livewire\Component;

class Index extends Component
{
    public $long_description = '';

    public function showDescription($id)
    {
        $this->long_description = UserLevel::query()->where('id', $id)->get();
    }

    public function render()
    {
        $long_description = $this->long_description;
        $levels = UserLevel::all();
        return view('livewire.client.profile.user-level.index', ['levels' => $levels, 'long_description' => $long_description])->layout('layouts.app');
    }
}
