<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\SecurityController;

Route::redirect('/', '/login', 301);
Route::get('/index2', function(){
    return view('index');
});
Route::controller(SecurityController::class)
    ->group(function() {
        Route::get('login', 'showFormAuth');
        Route::post('login', 'auth')->name('auth');
    });
