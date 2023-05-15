<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\File;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.services.index', ['services' => $services])->layout('layouts.app-admin');
    }
}
