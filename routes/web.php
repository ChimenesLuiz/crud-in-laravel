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
    Route::get('/', 'index') -> name('login.index');
    Route::post('/', 'login') -> name('login.login');
    Route::post('/login/store', 'store') -> name('login.store');
    Route::get('/login/create', 'create') -> name('login.create');
    Route::get('/login/destroy', 'destroy') -> name('login.destroy');
});

//HOME
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']) -> name('home.index');
});


//USER
Route::middleware(['auth', 'auth.session'])->group(function () {
    //USER
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index') -> name('user.index');
        Route::get('/user/create', 'create') -> name('user.create');
        Route::post('/user', 'store') -> name('user.store');
        Route::get('/user/{id}/edit', 'edit') -> name('user.edit');
        Route::put('/user/{id}', 'update') -> name('user.update');
        Route::get('/user/{id}', 'destroy') -> name('user.destroy');

    });
    //PROFILE
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index') -> name('profile.index');
        Route::get('/profile/create', 'create') -> name('profile.create');
        Route::post('/profile', 'store') -> name('profile.store');
        Route::get('/profile/{id}/edit', 'edit') -> name('profile.edit');
        Route::put('/profile/{id}', 'update') -> name('profile.update');
        Route::get('/profile/{id}', 'destroy') -> name('profile.destroy');

    });
});

//PRODUCT
Route::controller(ProductController::class) -> group(function () {
    Route::get('/product', 'index') -> name('product.index');
    Route::get('/product/create', 'create') -> name('product.create');
    Route::get('/product/create/store', 'store') -> name('product.store');
    Route::get('/product/edit/{id}', 'edit') -> name('product.edit');
    Route::get('/product/update/{id}', 'update') -> name('product.update');
    Route::get('/product/destroy/{id}', 'destroy') -> name('product.destroy');
});