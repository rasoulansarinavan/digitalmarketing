<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use App\Models\UserLevel;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public function render()
    {
        $kycies = UserLevel::all();
        $permissions = Permission::all();
        $roles = Role::all();
        $users = User::all();
        return view('livewire.admin.user.index', [
            'permissions' => $permissions,
            'roles' => $roles,
            'users' => $users, 'kycies' => $kycies])->layout('layouts.app-admin');
    }
}
