<?php

namespace App\Http\Livewire\Admin\Permission;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $name = '', $permission_id;
    protected $listeners = ['delete'];

    public function savePermission($formData, Permission $permissions)
    {
        if ($this->permission_id != null) {
            $permission_id = $this->permission_id;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        } else {
            $permission_id = 0;
            $validator = Validator::make($formData, [
                'name' => 'required | regex:/^[ا-یa-zA-Z0-9@$#^%&*!]+$/u',
            ]);
        }

        $validator->validate();
        $this->resetValidation();
        $permissions->savePermission($formData, $permission_id);

        $this->dispatchBrowserEvent('success', [
            'message' => trans('alerts.success')
        ]);

        $this->name = '';
        $this->permission_id = '';
    }

    public function editPermission($permission_id)
    {
        $permission = Permission::query()->where('id', $permission_id)->first();

        $this->name = $permission->name;
        $this->permission_id = $permission->id;
    }

    public function deletePermission($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => trans('Are you sure???'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($permission_id)
    {
        Permission::query()->where('id', $permission_id)->delete();
        $this->dispatchBrowserEvent('error', [
            'message' => 'Delete operation was successful'
        ]);
    }

    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.admin.permission.index', ['permissions' => $permissions])->layout('layouts.app-admin');
    }

}
