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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('product', App\Http\Controllers\ProductController::class)->only('index');


Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index', 'create', 'store');

Route::resource('product', App\Http\Controllers\ProductController::class)->except('edit', 'update', 'destroy');


Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index', 'create', 'store');

Route::resource('customer', App\Http\Controllers\CustomerController::class)->only('index', 'create', 'store');

Route::resource('invoice', App\Http\Controllers\InvoiceController::class)->only('index', 'create', 'store');

Route::resource('purchase', App\Http\Controllers\PurchaseController::class)->only('index', 'create', 'store');

Route::resource('product', App\Http\Controllers\ProductController::class)->except('edit', 'update', 'destroy');
