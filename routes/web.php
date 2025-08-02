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

Route::get('/', function (){
    return view('welcome');
});


Route::get('/table',[App\Http\Controllers\BackendTemplateController::class, 'tablefun'])->name('table');

Route::resource('category', App\Http\Controllers\CategoryController::class);
Route::resource('occations', App\Http\Controllers\OccationController::class);
Route::resource('types', App\Http\Controllers\TypeController::class);
Route::resource('flowers', App\Http\Controllers\FlowerController::class);

//for ui
Route::get('/', [App\Http\Controllers\FrontendController::class,'index'])->name('homepage');
Route::get('/detail', [App\Http\Controllers\FrontendController::class,'detail'])->name('detailpage');
Route::get('/occassions', [App\Http\Controllers\FrontendController::class,'occassion'])->name('occassionpage');
Route::get('/flowers', [App\Http\Controllers\FrontendController::class,'flower'])->name('flowerpage');
Route::get('/reviews', [App\Http\Controllers\FrontendController::class,'review'])->name('reviewpage');
Route::get('/contacts', [App\Http\Controllers\FrontendController::class,'contact'])->name('contactpage');
Route::get('/carts', [App\Http\Controllers\FrontendController::class,'cart'])->name('cartpage');



