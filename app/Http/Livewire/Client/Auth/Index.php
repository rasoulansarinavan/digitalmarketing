<?php

namespace App\Http\Livewire\Client\Auth;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.app-auth-client');
    }
}
