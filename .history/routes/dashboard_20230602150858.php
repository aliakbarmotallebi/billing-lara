<?php

Route::resource('product', App\Http\Controllers\ProductController::class)->only('index');


Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index', 'create', 'store');

Route::resource('product', App\Http\Controllers\ProductController::class)->except('edit', 'update', 'destroy');


Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index', 'create', 'store');

Route::resource('customer', App\Http\Controllers\CustomerController::class)->only('index', 'create', 'store');

Route::resource('invoice', App\Http\Controllers\InvoiceController::class)->only('index', 'create', 'store');

Route::resource('purchase', App\Http\Controllers\PurchaseController::class)->only('index', 'create', 'store');

Route::resource('product', App\Http\Controllers\ProductController::class)->except('edit', 'update', 'destroy');
