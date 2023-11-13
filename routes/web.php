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

Route::get('/', [HomeController::class, 'index']) -> name('home.index');

//USER
Route::get('/user', [UserController::class, 'index']) -> name('user.index');
Route::get('/user/create', [UserController::class, 'create']) -> name('user.create');
Route::get('/user/create/store', [UserController::class, 'store']) -> name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit']) -> name('user.edit');
Route::get('/user/update/{id}', [UserController::class, 'update']) -> name('user.update');
Route::get('/user/destroy/{id}', [UserController::class, 'destroy']) -> name('user.destroy');
