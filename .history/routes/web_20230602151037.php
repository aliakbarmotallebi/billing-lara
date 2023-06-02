<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\SecurityController;

Route::redirect('/', '/login', 301);

Route::get('/login', [SecurityController::class, 'showFormLogin'])
    ->name('login');
