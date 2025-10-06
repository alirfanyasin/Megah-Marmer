<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurLocationController;
use App\Http\Controllers\CategoryProductController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}/products', [CategoryProductController::class, 'index']);
Route::get('/our-locations', [OurLocationController::class, 'index']);

// Admin Login Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('post.login');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::prefix('app')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/products', [AdminProductController::class, 'index']);
    });
