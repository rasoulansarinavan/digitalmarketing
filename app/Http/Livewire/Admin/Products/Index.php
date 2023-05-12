<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.products.index')->layout('layouts.app-admin');
    }
}
