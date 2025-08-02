<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend/User Routes
|--------------------------------------------------------------------------
|
| These routes are for the frontend user interface.
| All routes are public and accessible to users.
|
*/

// Homepage and main pages
Route::get('/', [App\Http\Controllers\FrontendController::class,'index'])->name('homepage');
Route::get('/detail', [App\Http\Controllers\FrontendController::class,'detail'])->name('detailpage');
Route::get('/occassions', [App\Http\Controllers\FrontendController::class,'occassion'])->name('occassionpage');
Route::get('/flowerss', [App\Http\Controllers\FrontendController::class,'flower'])->name('flowerpage');
Route::get('/reviews', [App\Http\Controllers\FrontendController::class,'review'])->name('reviewpage');
Route::get('/contacts', [App\Http\Controllers\FrontendController::class,'contact'])->name('contactpage');
Route::get('/carts', [App\Http\Controllers\FrontendController::class,'cart'])->name('cartpage');

// Category and Occasion detail pages
Route::get('/category/{id}', [App\Http\Controllers\FrontendController::class,'categoryDetail'])->name('category.detail');
Route::get('/occasion/{id}', [App\Http\Controllers\FrontendController::class,'occasionDetail'])->name('occasion.detail');
Route::get('/categories', [App\Http\Controllers\FrontendController::class,'allCategories'])->name('categories.all');
Route::get('/flowers', [App\Http\Controllers\FrontendController::class,'allFlowers'])->name('flowers.all');
