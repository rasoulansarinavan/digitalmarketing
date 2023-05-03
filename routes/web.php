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
    return view('welcome');
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
