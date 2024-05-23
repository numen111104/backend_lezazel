<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\ProductGalleryController;



Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::resource('home', HomeDashboardController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('galleries', ProductGalleryController::class);
    Route::resource('transactions', TransactionController::class);
    Route::post('/store-review', [LandingPageController::class, 'store'])->name('store-review');
});
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
