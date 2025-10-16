<?php

use App\Http\Controllers\OurStoryController;
use App\Http\Controllers\Admin\About\OurStoryController as AdminOurStoryController;

use App\Http\Controllers\Admin\CategorySubController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\Settings\ManageCategoryMenuController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Settings\HomeImageController;
use App\Http\Controllers\Admin\Settings\LocationController;
use App\Http\Controllers\Admin\Settings\PhoneNumberController;
use App\Http\Controllers\Admin\Settings\SocialMediaController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurLocationController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\CategorySubProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/sub/{id_category}/products', [CategorySubProductController::class, 'index'])->name('category.sub');
Route::get('/category/{id_category}/{id_sub_category}/products', [CategoryProductController::class, 'index'])->name('category.products');
Route::get('/category/{id_category}/{id_sub_category}/products/{id_product}/show', [CategoryProductController::class, 'show'])->name('category.products.detail');
Route::get('/our-locations', [OurLocationController::class, 'index'])->name('our-locations');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('app.subscribe.store');

Route::get('/search', [SearchController::class, 'index'])->name('search'); // JSON


// About us
Route::prefix('about')->group(function () {
    Route::get('/our-story', [OurStoryController::class, 'index'])->name('about.our-story.index');
    Route::post('/our-story', [OurStoryController::class, 'store'])->name('about.our-story.store');
    Route::get('/our-story/{}', [OurStoryController::class, 'store'])->name('about.our-story.store');
    Route::post('/our-story', [OurStoryController::class, 'store'])->name('about.our-story.store');
});


// Admin Login Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('post.login');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');
});
// Admin Routes
Route::prefix('app')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');



        // Category Menu
        Route::prefix('category')->group(function () {
            Route::get('/{id}/sub-menu', [AdminCategoryController::class, 'index'])->name('category-sub-menu.index');
            Route::post('/{id}/sub-menu/store', [CategorySubController::class, 'store'])->name('category-sub-menu.store');
            Route::get('/{id}/sub-menu/edit', [CategorySubController::class, 'edit'])->name('category-sub-menu.edit');
            Route::put('/{id}/sub-menu/update', [CategorySubController::class, 'update'])->name('category-sub-menu.update');
            Route::delete('/{id}/sub-menu/destroy', [CategorySubController::class, 'destroy'])->name('category-sub-menu.destroy');
        });

        // Product Routes
        Route::prefix('products')->group(function () {
            Route::get('/category/{id_category}/{id_sub_category}/sub', [AdminProductController::class, 'index'])->name('app.products.index');
            Route::get('/category/{id_category}/{id_sub_category}/sub/{id_product}/show', [AdminProductController::class, 'show'])->name('app.products.show');
            Route::get('/category/{id_category}/{id_sub_category}/sub/create', [AdminProductController::class, 'create'])->name('app.products.create');
            Route::post('/category/store/{id_sub_category}/sub', [AdminProductController::class, 'store'])->name('app.products.store');
            Route::get('/category/{id_product}/edit/', [AdminProductController::class, 'edit'])->name('app.products.edit');
            Route::put('/category/{id_product}/update', [AdminProductController::class, 'update'])->name('app.products.update');
            Route::delete('/category/{id_product}/destroy', [AdminProductController::class, 'destroy'])->name('app.products.destroy');
        });

        // Subscribe
        Route::get('/subscribe', [SubscribeController::class, 'index'])->name('app.subscribe.index');
        Route::get('/subscribe/{id}/destroy', [SubscribeController::class, 'destroy'])->name('app.destroy');


        // Settings Routes
        Route::prefix('settings')->group(function () {
            // Manage Category Menu
            Route::get('/manage-category-menu', [ManageCategoryMenuController::class, 'index'])
                ->name('settings.manage-category-menu');

            Route::post('/manage-category-menu/store', [ManageCategoryMenuController::class, 'store'])
                ->name('settings.manage-category-menu.store');

            Route::get('/manage-category-menu/{id}/edit', [ManageCategoryMenuController::class, 'edit'])
                ->name('settings.manage-category-menu.edit');

            Route::put('/manage-category-menu/{id}/update', [ManageCategoryMenuController::class, 'update'])
                ->name('settings.manage-category-menu.update');

            Route::delete('/manage-category-menu/{id}/destroy', [ManageCategoryMenuController::class, 'destroy'])
                ->name('settings.manage-category-menu.destroy');


            // Location
            Route::get('/location', [LocationController::class, 'index'])->name('app.settings.location.index');
            Route::post('/location', [LocationController::class, 'store'])->name('app.settings.location.store');
            Route::get('/location/{id}/edit', [LocationController::class, 'edit'])->name('app.settings.location.edit');
            Route::put('/location/{id}/update', [LocationController::class, 'update'])->name('app.settings.location.update');
            Route::delete('/location/{id}/destroy', [LocationController::class, 'destroy'])->name('app.settings.location.destroy');

            // Social Media
            Route::get('/social-media', [SocialMediaController::class, 'index'])->name('app.settings.social-media.index');
            Route::post('/social-media', [SocialMediaController::class, 'store'])->name('app.settings.social-media.store');
            Route::get('/social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('app.settings.social-media.edit');
            Route::put('/social-media/{id}/update', [SocialMediaController::class, 'update'])->name('app.settings.social-media.update');
            Route::delete('/social-media/{id}/destroy', [SocialMediaController::class, 'destroy'])->name('app.settings.social-media.destroy');

            // Phone Number
            Route::get('/phone-number', [PhoneNumberController::class, 'index'])->name('app.settings.phone-number.index');
            Route::post('/phone-number', [PhoneNumberController::class, 'store'])->name('app.settings.phone-number.store');
            Route::get('/phone-number/{id}/edit', [PhoneNumberController::class, 'edit'])->name('app.settings.phone-number.edit');
            Route::put('/phone-number/{id}/update', [PhoneNumberController::class, 'update'])->name('app.settings.phone-number.update');
            Route::delete('/phone-number/{id}/destroy', [PhoneNumberController::class, 'destroy'])->name('app.settings.phone-number.destroy');

            // Home Image
            Route::get('/home-image', [HomeImageController::class, 'index'])->name('app.settings.home-image.index');
            Route::get('/home-image/{id}/edit', [HomeImageController::class, 'edit'])->name('app.settings.home-image.edit');
            Route::put('/home-image/{id}/update', [HomeImageController::class, 'update'])->name('app.settings.home-image.update');
            // Route::delete('/home-image/{id}/destroy', [HomeImageController::class, 'destroy'])->name('app.settings.home-image.destroy');
        });


        // About us for admin
        Route::prefix('about')->group(function () {
            Route::get('/our-story', [AdminOurStoryController::class, 'index'])->name('app.about.our-story.index');
            Route::post('/our-story', [AdminOurStoryController::class, 'store'])->name('app.about.our-story.store');
            Route::get('/our-story/{id}/edit', [AdminOurStoryController::class, 'edit'])->name('app.about.our-story.edit');
            Route::put('/our-story/{id}/update', [AdminOurStoryController::class, 'update'])->name('app.about.our-story.update');
            Route::delete('/our-story/{id}/destroy', [AdminOurStoryController::class, 'destroy'])->name('app.about.our-story.destroy');
        });
    });
