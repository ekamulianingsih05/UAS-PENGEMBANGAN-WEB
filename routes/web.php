<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DyesthaController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/dyestha', [DyesthaController::class, 'index']);