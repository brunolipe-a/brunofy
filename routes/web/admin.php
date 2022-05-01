<?php

use App\Http\Controllers\Admin\ArtistController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {
        Route::get('dashboard', fn() => view('admin.dashboard'))->name('dashboard');
        Route::resource('artists', ArtistController::class);
    });
