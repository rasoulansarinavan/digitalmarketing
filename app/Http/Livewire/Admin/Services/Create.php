<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $formData = [], $categories = [], $file, $title, $discount, $price, $category_id, $description, $long_description, $meta_name, $meta_keywords, $meta_description, $service_id;

    public function submitInfo($formData, Service $services)
    {
        $formData['file'] = $this->file;
        if ($this->service_id != null) {
            $service_id = $this->service_id;
            $validator = Validator::make($formData, [
                'file' => 'required|image|mimes:jpg,jpeg,png|max:1024',
                'title' => 'required | string | max: 30',
                'discount' => 'required | integer ',
                'price' => 'required | integer ',
                'category_id' => 'required | integer ',
                'description' => 'required | string',
                'long_description' => '',
                'meta_name' => 'required | string',
                'meta_keywords' => 'required | string',
                'meta_description' => 'required | string',
            ]);
        } else {
            $service_id = 0;
            $formData['file'] = $this->file;
            $validator = Validator::make($formData, [
                'file' => 'required|image|mimes:jpg,jpeg,png|max:10024',
                'title' => 'required | string | max: 30',
                'discount' => 'required | integer ',
                'price' => 'required | integer ',
                'category_id' => 'required | integer ',
                'description' => 'required | string',
                'long_description' => '',
                'meta_name' => 'required | string',
                'meta_keywords' => 'required | string',
                'meta_description' => 'required | string',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $services->submitInfo($formData, $service_id, $this->file);
    }

    public function mount()
    {
        $this->categories = Category::query()->where('category_id', '!=', 0)->get();
    }

    public function render()
    {
        return view('livewire.admin.services.create')->layout('layouts.app-admin');
    }
}
