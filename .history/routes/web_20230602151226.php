<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\SecurityController;

Route::redirect('/', '/login', 301);

Route::controller(SecurityController::class)
    ->group(function() {
        Route::get('login', 'showFormAuth');
        Route::post('login', 'auth')->name('auth');
    });
