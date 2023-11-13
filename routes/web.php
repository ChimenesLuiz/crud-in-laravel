<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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