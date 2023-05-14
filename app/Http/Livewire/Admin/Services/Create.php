<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $categories = [];

    public function submitGeneralInformation($formData)
    {
//        dd($formData);

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
