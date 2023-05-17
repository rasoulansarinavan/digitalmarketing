<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\File;
use App\Models\Service;
use App\Models\ServiceSeoItems;
use Livewire\Component;

class Index extends Component
{
    public $formData = [], $service_data = [], $categories = [], $file, $image = [],
        $seo = [], $title, $discount, $category_id, $description, $long_description,
        $meta_name, $meta_keywords, $meta_description, $service_id;

    public function deleteService($id)
    {
        $fileName = File::query()->where(['service_id' => $id, 'type' => 'service'])->pluck('file')->first();
        unlink($fileName);
        return Service::query()->where('id', $id)->delete();
    }

    public function editService($service_id)
    {
        $this->redirect('/admin/service/create/'.$service_id);
    }

    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.services.index', ['services' => $services])->layout('layouts.app-admin');
    }
}
