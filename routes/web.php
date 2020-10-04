<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('products',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('store',[App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

Route::get('edit/product/{id}',[App\Http\Controllers\ProductController::class, 'edit']);
Route::get('delete/product/{id}',[App\Http\Controllers\ProductController::class, 'Delete']);
Route::get('show/product/{id}',[App\Http\Controllers\ProductController::class, 'show']);

Route::post('update/product/{id}',[App\Http\Controllers\ProductController::class, 'update']);
