<?php

use App\Http\Livewire\Client\Profile\Dashboard\index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
});

//Route::get('/', Home::class)->name('client.home');

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {

    Route::name('auth.client')->group(function () {
        Route::get('/', \App\Http\Livewire\Client\Auth\Index::class);
     /*   Route::get('/gmail', [Authentication::class, 'redirectToProvider'])->name('.gmail');
        Route::get('/gmail/callback', [Authentication::class, 'handleProviderCallback'])->name('.gmail.callback');*/
    });

});

Route::group(['prefix' => 'profile',/* 'middleware' => 'auth:web'*/], function () {
    Route::name('profile.')->group(function () {
        Route::get('/dashboard', index::class)->name('dashboard');
    });

});


/*********** ADMIN PANEL *************/


Route::group(['prefix' => 'admin','name'=>'admin.',/* 'middleware' =>'auth:admin'*/], function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

});
