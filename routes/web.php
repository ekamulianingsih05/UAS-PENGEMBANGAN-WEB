<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedeController;
use App\Http\Controllers\DyesthaController;
use App\Http\Controllers\EkaController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/gede', [GedeController::class, 'index']);
Route::get('/dyestha', [DyesthaController::class, 'index']);
Route::get('/eka', [EkaController::class, 'index']);

require __DIR__.'/settings.php';
