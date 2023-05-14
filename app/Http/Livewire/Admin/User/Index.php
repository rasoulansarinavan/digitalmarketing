<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Kyc;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{

    public $dataUser;

    public function showDataModal($userId,$levelId)
    {

        $data = Kyc::query()->where([
            'user_id'=>$userId,
            'user_level_id'=>$levelId,
        ])->pluck('data')->first();
        $this->dataUser = unserialize($data);

//dd($this->dataUser);
    }

    public function render()
    {
        $kycies = UserLevel::all();
        $permissions = Permission::all();
        $roles = Role::all();
        $users = User::all();
        return view('livewire.admin.user.index', [
            'permissions' => $permissions,
            'roles' => $roles,
            'users' => $users,
            'kycies' => $kycies,
//            'dataUser' => $this->dataUser
        ])->layout('layouts.app-admin');
    }
}
