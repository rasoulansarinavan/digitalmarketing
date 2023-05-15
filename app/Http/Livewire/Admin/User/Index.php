<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Kyc;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{

    public $dataUser;
    public $userId;
    public $currentLevel = 0;
    public $showCommentFiled = 'hidden';


    public function showDataModal($userId, $levelId)
    {

        $data = Kyc::query()->where([
            'user_id' => $userId,
            'user_level_id' => $levelId,
        ])->pluck('data')->first();
        $this->dataUser = unserialize($data);

        $this->currentLevel = $levelId;
        $this->userId = $userId;
    }

    public function changeLevel($formData)
    {
        if ($this->showCommentFiled == 'hidden') {
            $validator = Validator::make($formData, [
                'status' => 'required|exists:statuses,id',
            ]);
        } else {
            $validator = Validator::make($formData, [
                'status' => 'required|exists:statuses,id',
                'comment' => 'required|string',
            ]);
        }

        $validator->validate();
        $this->resetValidation();

        Kyc::query()->where([
            'user_id' => $this->userId,
            'user_level_id' => $this->currentLevel,
        ])->update(['status_id' => $formData['status']]);

        if ($formData['status'] == 2) {
            User::query()->where([
                'id' => $this->userId,
            ])->update(['user_level_id' => $this->currentLevel]);
        }

        /*

         if ($formData['status'] == 2) {
             $user->
         } else {
             $user->update(['user_level_id' => $this->currentLevel]);
         }*/

        $this->redirect('/admin/users');

    }


    public function render()
    {

        $permissions = Permission::all();
        $roles = Role::all();
        $users = User::with('kycies')->get();

        return view('livewire.admin.user.index', [
            'permissions' => $permissions,
            'roles' => $roles,
            'users' => $users,
        ])->layout('layouts.app-admin');
    }
}
