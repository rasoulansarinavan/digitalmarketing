<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Category;
use App\Models\File;
use App\Models\Service;
use App\Models\ServiceSeoItems;
use Illuminate\Support\Facades\Validator;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $formData = [], $service_data = [], $categories = [], $file, $image = [], $seo = [], $title, $discount, $category_id, $description, $long_description, $meta_name, $meta_keywords, $meta_description, $service_id;

    public function mount($id)
    {
        if ($id != null) {
            $this->service_data = Service::query()->where('id', $id)->first()->toArray();
            $this->image = File::query()->where('service_id', $id)->first()->toArray();
            $this->seo = ServiceSeoItems::query()->where('service_id', $id)->first()->toArray();

            $service = Service::query()->where('id', $id)->first();
            $file = File::query()->where('service_id', $id)->first();
            $seo = ServiceSeoItems::query()->where('service_id', $id)->first();
            $this->title = $service->title;
            $this->category_id = $service->category_id;
            $this->description = $service->description;
            $this->long_description = $service->long_description;
            $this->discount = $service->discount;
            $this->file = $file->file;
            $this->meta_name = $seo->meta_name;
            $this->meta_keywords = $seo->meta_keywords;
            $this->meta_description = $seo->meta_description;
            $this->service_id = $service->id;
        }
        $this->categories = Category::all();
    }


    public function submitInfo($formData, Service $services)
    {
        $formData['file'] = $this->file;
        if ($this->service_id != null) {
            $service_id = $this->service_id;
            $validator = Validator::make($formData, [
                'file' => 'required|image|mimes:jpg,jpeg,png|max:100024',
                'title' => 'required | string | max: 50',
                'discount' => 'required | integer ',
                'category_id' => 'required | integer ',
                'description' => 'required | string',
                'long_description' => 'required | string',
                'meta_name' => 'required | string',
                'meta_keywords' => 'required | string',
                'meta_description' => 'required | string',
            ]);
        } else {

            $service_id = 0;
            $formData['file'] = $this->file;
            $validator = Validator::make($formData, [
                'file' => 'required|image|mimes:jpg,jpeg,png|max:10024',
                'title' => 'required | string | max: 50',
                'discount' => ' integer ',
                'category_id' => 'required | integer ',
                'description' => 'required | string',
                'long_description' => 'required | string',
                'meta_name' => 'required | string',
                'meta_keywords' => 'required | string',
                'meta_description' => 'required | string',
            ]);
        }
        $validator->validate();
        $this->resetValidation();
        $services->submitInfo($formData, $service_id, $this->file);

        $this->title = '';
        $this->category_id = '';
        $this->description = '';
        $this->long_description = '';
        $this->discount = '';
        $this->file = '';
        $this->meta_name = '';
        $this->meta_keywords = '';
        $this->meta_description = '';
        $this->service_id = '';

        $this->redirect('/admin/service/index');
    }

    public function render()
    {
        return view('livewire.admin.services.create')->layout('layouts.app-admin');
    }
}
