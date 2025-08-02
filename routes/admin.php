<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin/Dashboard Routes
|--------------------------------------------------------------------------
|
| These routes are for the admin dashboard and backend functionality.
| All routes are prefixed with 'admin' and protected with auth middleware.
|
*/

// ========================================
// ADMIN AUTHENTICATION ROUTES (No middleware)
// ========================================
Route::get('/login', [App\Http\Controllers\AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [App\Http\Controllers\AdminAuthController::class, 'login'])->name('admin.login.submit');

// ========================================
// PROTECTED ADMIN ROUTES (Require authentication)
// ========================================
Route::middleware(['admin.auth'])->group(function () {

    // Logout
    Route::post('/logout', [App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');

    // Profile Management
    Route::get('/profile', [App\Http\Controllers\AdminAuthController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [App\Http\Controllers\AdminAuthController::class, 'updateProfile'])->name('admin.profile.update');

    // Dashboard
    Route::get('/table', [App\Http\Controllers\BackendTemplateController::class, 'tablefun'])->name('admin.table');

    // Categories Management
    Route::resource('category', App\Http\Controllers\CategoryController::class)->names([
        'index' => 'admin.category.index',
        'create' => 'admin.category.create',
        'store' => 'admin.category.store',
        'show' => 'admin.category.show',
        'edit' => 'admin.category.edit',
        'update' => 'admin.category.update',
        'destroy' => 'admin.category.destroy',
    ]);

    // Occasions Management
    Route::resource('occations', App\Http\Controllers\OccationController::class)->names([
        'index' => 'admin.occations.index',
        'create' => 'admin.occations.create',
        'store' => 'admin.occations.store',
        'show' => 'admin.occations.show',
        'edit' => 'admin.occations.edit',
        'update' => 'admin.occations.update',
        'destroy' => 'admin.occations.destroy',
    ]);

    // Types Management
    Route::resource('types', App\Http\Controllers\TypeController::class)->names([
        'index' => 'admin.types.index',
        'create' => 'admin.types.create',
        'store' => 'admin.types.store',
        'show' => 'admin.types.show',
        'edit' => 'admin.types.edit',
        'update' => 'admin.types.update',
        'destroy' => 'admin.types.destroy',
    ]);

    // Flowers Management
    Route::resource('flowers', App\Http\Controllers\FlowerController::class)->names([
        'index' => 'admin.flowers.index',
        'create' => 'admin.flowers.create',
        'store' => 'admin.flowers.store',
        'show' => 'admin.flowers.show',
        'edit' => 'admin.flowers.edit',
        'update' => 'admin.flowers.update',
        'destroy' => 'admin.flowers.destroy',
    ]);
});
