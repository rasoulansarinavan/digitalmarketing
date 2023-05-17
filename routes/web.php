<?php


use App\Http\Livewire\Client\Profile\Dashboard\index;
use Illuminate\Support\Facades\Route;


Route::get('auth/logout', [\App\Http\Livewire\Client\Auth\Index::class, 'clientLogout'])->name('auth.client.logout')->middleware('auth:web');

//Route::get('/', Home::class)->name('client.home');

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {

    Route::name('auth.client')->group(function () {
        Route::get('/', \App\Http\Livewire\Client\Auth\Index::class);
        Route::get('/gmail', [\App\Http\Livewire\Client\Auth\Index::class, 'redirectToProvider'])->name('.gmail');
        Route::get('/gmail/callback', [\App\Http\Livewire\Client\Auth\Index::class, 'handleProviderCallback'])->name('.gmail.callback');
    });

});

Route::group(['prefix' => 'profile', /*'middleware' => 'auth:web'*/], function () {
    Route::name('profile.')->group(function () {
        Route::get('/dashboard', index::class)->name('dashboard');
        Route::get('/kyc/{level_id}', \App\Http\Livewire\Client\Profile\UserLevel\Index::class)->name('kyc');
//        Route::get('/service/{id}', \App\Http\Livewire\Client\Profile\Service\Index::class)->name('service');
    });
});


/*********** ADMIN PANEL *************/


Route::group(['prefix' => 'admin', 'name' => 'admin.',/* 'middleware' =>'auth:admin'*/], function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
    Route::get('/users', \App\Http\Livewire\Admin\User\Index::class)->name('users');
    Route::get('/permission', \App\Http\Livewire\Admin\Permission\Index::class)->name('permission');
    Route::get('/role', \App\Http\Livewire\Admin\Role\Index::class)->name('role');
    Route::get('/category', \App\Http\Livewire\Admin\Category\Index::class)->name('category');
    Route::get('/userLevels', \App\Http\Livewire\Admin\UserLevel\Index::class)->name('userLevels');
    Route::get('/service/create/{id?}', \App\Http\Livewire\Admin\Services\Create::class)->name('service.create');
    Route::get('/service/index', \App\Http\Livewire\Admin\Services\Index::class)->name('service.index');
});

