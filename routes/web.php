<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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
Route::controller(LoginController::class) -> group(function () {
    Route::get('/login', 'index') -> name('login.index');
    Route::post('/login', 'store') -> name('login.store');
    Route::post('/login', 'login') -> name('login.login');
    Route::get('/login/create', 'create') -> name('login.create');
    Route::get('/login/destroy/{id}', 'destroy') -> name('login.destroy');
});

//HOME
Route::controller(HomeController::class) -> group(function () {
    Route::get('/', 'index') -> name('home.index');
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

//USER
Route::controller(ProductController::class) -> group(function () {
    Route::get('/product', 'index') -> name('product.index');
    Route::get('/product/create', 'create') -> name('product.create');
    Route::get('/product/create/store', 'store') -> name('product.store');
    Route::get('/product/edit/{id}', 'edit') -> name('product.edit');
    Route::get('/product/update/{id}', 'update') -> name('product.update');
    Route::get('/product/destroy/{id}', 'destroy') -> name('product.destroy');
});