<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category-products');
});

Route::get('/product/detail', function () {
    return view('product-detail');
});

Route::get('/our-locations', function () {
    return view('our-locations');
});


Route::get('/admin/login', function () {
    return view('auth.login');
});


Route::prefix('app')->group(function () {
    Route::get('/dashboard', function () {
        return view('app.dashboard');
    });

    Route::get('/products', function () {
        return view('app.products');
    });

    Route::get('/transactions', function () {
        return view('app.transactions');
    });

    Route::get('/settings', function () {
        return view('app.settings');
    });
});
