<?php

use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UrlController::class, 'index']);
Route::post('/shorten', [UrlController::class, 'store'])->name('url.shorten');
Route::get('/{shortCode}', [UrlController::class, 'redirect'])->name('url.redirect');
