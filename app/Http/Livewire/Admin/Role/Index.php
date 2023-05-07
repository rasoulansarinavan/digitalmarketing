<?php

namespace App\Http\Livewire\Admin\Role;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $name = '', $role_id;
    protected $listeners = ['delete'];

    public function saveRole($formData, Role $roles)
    {
        if ($this->role_id != null) {
            $role_id = $this->role_id;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $role_id = 0;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $roles->saveRole($formData, $role_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->role_id = '';
    }

    public function editRole($role_id)
    {
        $role = Role::query()->where('id', $role_id)->first();
        $this->name = $role->name;
        $this->role_id = $role->id;
    }

    public function deleteRole($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($role_id)
    {
        Role::query()->where('id', $role_id)->delete();
        $this->dispatchBrowserEvent('error', [
            'message' => 'Delete operation was successful'
        ]);
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.role.index', ['roles' => $roles])->layout('layouts.app-admin');
    }
}
