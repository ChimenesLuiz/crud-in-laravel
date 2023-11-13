<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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



//LOGIN
Route::get('/', [UserController::class, 'login']) -> name('user.login');

//HOME
Route::controller(HomeController::class) -> group(function () {
    Route::get('/home', 'index') -> name('home.index');
});

//USER
Route::controller(UserController::class) -> group(function () {
    Route::get('/user', 'index') -> name('user.index');
    Route::get('/user/create', 'create') -> name('user.create');
    Route::get('/user/create/store', 'store') -> name('user.store');
    Route::get('/user/edit/{id}', 'edit') -> name('user.edit');
    Route::get('/user/update/{id}', 'update') -> name('user.update');
    Route::get('/user/destroy/{id}', 'destroy') -> name('user.destroy');
});

//USER
Route::controller(ProfileController::class) -> group(function () {
    Route::get('/profile', 'index') -> name('profile.index');
    Route::get('/profile/create', 'create') -> name('profile.create');
    Route::get('/profile/create/store', 'store') -> name('profile.store');
    Route::get('/profile/edit/{id}', 'edit') -> name('profile.edit');
    Route::get('/profile/update/{id}', 'update') -> name('profile.update');
    Route::get('/profile/destroy/{id}', 'destroy') -> name('profile.destroy');
});