<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public $title = '', $category_id, $icon = '', $cat_id;
    protected $listeners = ['delete', 'saveCategory'];

    public function saveCategory($formData, Category $categories)
    {
        if ($this->cat_id != null) {
            $cat_id = $this->cat_id;
            $validator = Validator::make($formData, [
                'title' => 'required',
                'category_id' => ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $cat_id = 0;
            $validator = Validator::make($formData, [
                'title' => 'required',
                'category_id' => ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }
        $validator->validate();
        $this->resetValidation();
        $categories->saveCategory($formData, $cat_id);

        $this->dispatchBrowserEvent('swal:success', [
//            'message' => 'Add operation was successful'
            'type' => 'success',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $cat_id
        ]);

        $this->title = '';
        $this->category_id = '';
        $this->icon = '';
        $this->cat_id = '';
    }

    public function editCategory($cat_id)
    {
        $category = Category::query()->where('id', $cat_id)->first();

        $this->title = $category->title;
        $this->category_id = $category->category_id;
        $this->icon = $category->icon;
        $this->cat_id = $category->id;
    }

    public function deleteCategory($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($cat_id)
    {
        Category::query()->where('id', $cat_id)->delete();
        $this->dispatchBrowserEvent('error', [
            'message' => 'Delete operation was successful'
        ]);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.category.index', ['categories' => $categories])->layout('layouts.app-admin');
    }

}
