<?php

namespace App\Http\Livewire\Admin\UserLevel;

use App\Models\UserLevel;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{


    public $title = '', $description = '', $icon = '', $level_id;
    protected $listeners = ['delete'];

    public function saveUserLevel($formData, UserLevel $levels)
    {
        if ($this->level_id != null) {
            $level_id = $this->level_id;
            $validator = Validator::make($formData, [
                'title' => 'required',
                'description' => ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $level_id = 0;
            $validator = Validator::make($formData, [
                'title' => 'required',
                'description' => ' regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
                'icon' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }
        $validator->validate();
        $this->resetValidation();
        $levels->saveUserLevel($formData, $level_id);

        $this->dispatchBrowserEvent('success', [
            'message' => 'Add operation was successful'
        ]);

        $this->title = '';
        $this->description = '';
        $this->icon = '';
        $this->level_id = '';
    }

    public function editLevel($level_id)
    {
        $level = UserLevel::query()->where('id', $level_id)->first();

        $this->title = $level->title;
        $this->description = $level->description;
        $this->icon = $level->icon;
        $this->level_id = $level->id;
    }

    public function deleteLevel($id)
    {

        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($level_id)
    {
        UserLevel::query()->where('id', $level_id)->delete();
        $this->dispatchBrowserEvent('error', [
            'message' => 'Delete operation was successful'
        ]);
    }


    public function render()
    {
        $levels = UserLevel::all();
        return view('livewire.admin.user-level.index', ['levels' => $levels])->layout('layouts.app-admin');
    }
}
