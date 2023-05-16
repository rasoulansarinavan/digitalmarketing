<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\File;
use App\Models\Service;
use App\Models\ServiceSeoItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{

    public function deleteService($id)
    {

        $fileName = File::query()->where(['service_id' => $id, 'type' => 'service'])->pluck('file')->first();
        unlink($fileName);
        return  Service::query()->where('id', $id)->delete();
    }

    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.services.index', ['services' => $services])->layout('layouts.app-admin');
    }
}
