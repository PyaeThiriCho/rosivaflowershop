<?php

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

// ========================================
// FRONTEND/USER ROUTES
// ========================================
require __DIR__.'/frontend.php';

// ========================================
// ADMIN ROUTES (Authentication handled in admin.php)
// ========================================
Route::prefix('admin')->group(function () {
    require __DIR__.'/admin.php';
});



