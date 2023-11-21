<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;

//LOGIN
Route::controller(LoginController::class) -> group(function () {
    Route::get('/login', 'index') -> name('login.index');
    Route::post('/login', 'login') -> name('login.login');
    Route::post('/login/store', 'store') -> name('login.store');
    Route::get('/login/create', 'create') -> name('login.create');
    Route::get('/login/destroy', 'destroy') -> name('login.destroy');
});


//MUST BE LOGGED 
Route::middleware(['auth', 'auth.session'])->group(function () {
    //HOME
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index') -> name('dash.index');
        Route::get('/dashboard', 'index') -> name('dash.index');
        // Route::get('/user/create', 'create') -> name('user.create');
        // Route::post('/user', 'store') -> name('user.store');
        // Route::get('/user/{id}/edit', 'edit') -> name('user.edit');
        // Route::put('/user/{id}', 'update') -> name('user.update');
        // Route::get('/user/{id}', 'destroy') -> name('user.destroy');

    });

    //USER
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index') -> name('user.index');
        Route::get('/user/create', 'create') -> name('user.create');
        Route::post('/user', 'store') -> name('user.store');
        Route::get('/user/{id}/edit', 'edit') -> name('user.edit');
        Route::put('/user/{id}', 'update') -> name('user.update');
        Route::get('/user/{id}', 'destroy') -> name('user.destroy');

    });
    //CLIENT
    Route::controller(ClientController::class)->group(function () {
        Route::get('/client', 'index') -> name('client.index');
        Route::get('/client/create', 'create') -> name('client.create');
        Route::post('/client', 'store') -> name('client.store');
        Route::get('/client/{id}/edit', 'edit') -> name('client.edit');
        Route::put('/client/{id}', 'update') -> name('client.update');
        Route::get('/client/{id}', 'destroy') -> name('client.destroy');

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
    //PRODUCT
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index') -> name('product.index');
        Route::get('/product/create', 'create') -> name('product.create');
        Route::post('/product', 'store') -> name('product.store');
        Route::post('/product/create/', 'storeModal') -> name('product.storeModal');
        Route::get('/product/{id?}/edit', 'edit') -> name('product.edit');
        Route::put('/product/{id}', 'update') -> name('product.update');
        Route::get('/product/{id?}', 'destroy') -> name('product.destroy');

    });
    //SUPPLIER
    Route::controller(SupplierController::class)->group(function () {
        Route::get('/supplier', 'index') -> name('supplier.index');
        Route::get('/supplier/create', 'create') -> name('supplier.create');
        Route::post('/supplier', 'store') -> name('supplier.store');
        Route::post('/supplier/store/modal', 'storeModal') -> name('supplier.storeModal');
        Route::get('/supplier/{id?}/edit', 'edit') -> name('supplier.edit');
        Route::put('/supplier/{id}', 'update') -> name('supplier.update');
        Route::get('/supplier/{id?}', 'destroy') -> name('supplier.destroy');

    });
    //SUPPLIER
    Route::controller(TransactionController::class)->group(function () {
        Route::get('/transaction', 'index') -> name('transaction.index');
        Route::get('/transaction/create', 'create') -> name('transaction.create');
        Route::post('/transaction', 'store') -> name('transaction.store');
        Route::post('/transaction/store', 'storeModal') -> name('transaction.storeModal');
        Route::post('/transaction/create/', 'storeModal') -> name('transaction.storeModal');
        Route::get('/transaction/{id?}/edit', 'edit') -> name('transaction.edit');
        Route::put('/transaction/{id}', 'update') -> name('transaction.update');
        Route::get('/transaction/{id?}', 'destroy') -> name('transaction.destroy');

    });
    //ACCOUNT
    Route::controller(AccountController::class)->group(function () {
        Route::get('/account/{id}/edit', 'edit') -> name('account.edit');
        Route::get('/account/{id}/password', 'password') -> name('account.password');
        
        Route::put('/account/{id}', 'update') -> name('account.update');
        Route::put('/account/{id}/password', 'passwordUpdate') -> name('account.passwordUpdate');
    });

});
