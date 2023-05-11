<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Laravel\Sanctum\HasApiTokens;
use Livewire\WithFileUploads;

use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable

{
    use HasFactory;
    use WithFileUploads;

    protected $guarded = [];

    public function submitLevel1($formData, $image)
    {
        $user_level_id=\Illuminate\Support\Facades\Auth::user()->user_level_id;
        DB::transaction(function () use ($image, $user_level_id, $formData) {
            $image_name = '';
            if ($image) {
                $extension = $image->extension();
                $image_name = 'user_' . str::random(10) . time() . '.' . $extension;
                if ($user_level_id != 0) {
                    $userFileName = File::query()->where([
                        'product_id' => $user_level_id,
                        'type' => 'user',
                    ])->pluck('file')->first();
                    unlink('images/users/' . $userFileName);
                }
                Image::make($image)->crop('300', '300')->save(public_path('images/users/' . $image_name));
            }

            $user = $this->insertToUserTable($user_level_id, $formData);
            if ($image) {
                $this->insertToFileTable($user->id, $image_name);
            }
        });
    }

//    public function insertToUserTable($user_level_id, $formData)
//    {
//        return User::query()->updateOrCreate(
//            [
//                'id' => $user_level_id
//            ],
//            [
//                'code_melli' => $formData['code_melli'],
//                'birth_date' => $formData['birth_date']
//            ]
//        );
//    }

    public function insertToFileTable($user_level_id, $image_name)
    {
        File::query()->updateOrCreate(
            [
                'product_id' => $user_level_id,
                'type' => 'user'
            ],
            [
                'file' => $image_name
            ]
        );

    }

    use HasApiTokens, HasFactory, Notifiable, HasPermissions, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'picture',
        'mobile',
        'level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function checkUser($user)
    {
        $check = User::query()->where('email', $user['email'])->first();
        if (!$check) {
            $newUser = User::query()->create([
                'email' => $user['email'],
                'picture' => $user['picture'],
                'name' => $user['name'],
            ]);
            Auth::login($newUser, true);
        } else {
            Auth::login($check, true);
        }

    }
}
