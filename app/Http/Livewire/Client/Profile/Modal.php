<?php

namespace App\Http\Livewire\Client\Profile;

use Livewire\Component;

class Modal extends Component
{
    protected $listeners = ['showDescription'];
    public $description = '';
    public $title = '';

    public function showDescription($userLevel)
    {


        $this->description = $userLevel['long_description'];
        $this->title = $userLevel['title'];

    }

    public function render()
    {
        return view('livewire.client.profile.modal');
    }
}
