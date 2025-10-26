<?php

use App\Http\Controllers\OurStoryController;
use App\Http\Controllers\Admin\About\OurStoryController as AdminOurStoryController;

use App\Http\Controllers\Admin\CategorySubController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\Settings\ManageCategoryMenuController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\Settings\EmailOrderController;
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
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OurCommitmentsController;
use App\Http\Controllers\OurFactoryController;
use App\Http\Controllers\OurFinishingController;
use App\Http\Controllers\OurSolidStoneController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\ProductionProcessController;
use App\Http\Controllers\SawingMachineController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StoneStorageController;
use App\Http\Controllers\SuffingAreaController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

// Guest Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/sub/{id_category}/products', [CategorySubProductController::class, 'index'])->name('category.sub');
Route::get('/category/{id_category}/{id_sub_category}/products', [CategoryProductController::class, 'index'])->name('category.products');
Route::get('/products/all', [CategoryProductController::class, 'allProducts'])->name('products.all');
Route::get('/category/{id_category}/{id_sub_category}/products/{id_product}/show', [CategoryProductController::class, 'show'])->name('category.products.detail');
Route::get('/our-locations', [OurLocationController::class, 'index'])->name('our-locations');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('app.subscribe.store');

// Search
Route::get('/search', [SearchController::class, 'index'])
    ->middleware('throttle:60,1')
    ->name('search');




// Our Solid Stone
Route::prefix('our-solid-stone')->group(function () {
    Route::get('/marbel-black', [OurSolidStoneController::class, 'black_marble'])->name('oss.black-marble');
    Route::get('/marbel-cream', [OurSolidStoneController::class, 'cream_marble'])->name('oss.cream-marble');
    Route::get('/marbel-grey-pg', [OurSolidStoneController::class, 'grey_pg_marble'])->name('oss.grey-pg-marble');
    Route::get('/marbel-grey-dk', [OurSolidStoneController::class, 'grey_dk_marble'])->name('oss.grey-dk-marble');
    Route::get('/marbel-grey-dr', [OurSolidStoneController::class, 'grey_dr_marble'])->name('oss.grey-dr-marble');
    Route::get('/marbel-light-grey', [OurSolidStoneController::class, 'light_grey_marble'])->name('oss.light-grey-marble');
    Route::get('/marbel-red', [OurSolidStoneController::class, 'red_marble'])->name('oss.red-marble');
    Route::get('/marbel-cocoa-brown', [OurSolidStoneController::class, 'cocoa_brown_marble'])->name('oss.cocoa-brown-marble');
    Route::get('/marbel-traventine', [OurSolidStoneController::class, 'traventine_marble'])->name('oss.traventine-marble');

    Route::get('/onyx-sunset', [OurSolidStoneController::class, 'sunset_onyx'])->name('oss.sunset-onyx');
    Route::get('/onyx-ivory', [OurSolidStoneController::class, 'ivory_onyx'])->name('oss.ivory-onyx');
    Route::get('/onyx-bw', [OurSolidStoneController::class, 'bw_onyx'])->name('oss.bw-onyx');
    Route::get('/onyx-pct', [OurSolidStoneController::class, 'pct_onyx'])->name('oss.pct-onyx');

    Route::get('/granite-local', [OurSolidStoneController::class, 'granite_local'])->name('oss.granite-local');
    Route::get('/petrified-wood', [OurSolidStoneController::class, 'petrified_wood'])->name('oss.petrified-wood');
    Route::get('/river-stone', [OurSolidStoneController::class, 'river_stone'])->name('oss.river-stone');
    Route::get('/lava-stone', [OurSolidStoneController::class, 'lava_stone'])->name('oss.lava-stone');
    Route::get('/lime-stone', [OurSolidStoneController::class, 'lime_stone'])->name('oss.lime-stone');
    Route::get('/ziolit-stone', [OurSolidStoneController::class, 'ziolit_stone'])->name('oss.ziolit-stone');
    Route::get('/terrazzo', [OurSolidStoneController::class, 'terrazzo'])->name('oss.terrazzo');
});

// Our Finishing
Route::prefix('our-finishing')->group(function () {
    Route::get('/polish', [OurFinishingController::class, 'polish'])->name('polish');
    Route::get('/doff-or-matte', [OurFinishingController::class, 'doff_or_matte'])->name('doff-or-matte');
    Route::get('/acid', [OurFinishingController::class, 'acid'])->name('acid');
    Route::get('/hammered', [OurFinishingController::class, 'hammered'])->name('hammered');
    Route::get('/burning', [OurFinishingController::class, 'burning'])->name('burning');
    Route::get('/texture', [OurFinishingController::class, 'texture'])->name('texture');
    Route::get('/groove', [OurFinishingController::class, 'groove'])->name('groove');
    Route::get('/stripe', [OurFinishingController::class, 'stripe'])->name('stripe');
    Route::get('/combination', [OurFinishingController::class, 'combination'])->name('combination');
});

// About us
Route::prefix('about')->group(function () {
    Route::get('/our-story', [OurStoryController::class, 'index'])->name('about.our-story.index');
    Route::get('/our-commitments', [OurCommitmentsController::class, 'index'])->name('about.our-commitments.index');
    Route::get('/our-team', [OurTeamController::class, 'index'])->name('about.our-team.index');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/packaging', [PackagingController::class, 'index'])->name('packaging');
    Route::get('/suffing-area', [SuffingAreaController::class, 'index'])->name('suffing-area');
    Route::get('/stone-storage', [StoneStorageController::class, 'index'])->name('stone-storage');
    Route::get('/our-factory', [OurFactoryController::class, 'index'])->name('our-factory');
    Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse');
    Route::get('/sawing-machine', [SawingMachineController::class, 'index'])->name('sawing-machine');
    Route::get('/production-process', [ProductionProcessController::class, 'index'])->name('production-process');
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

            // Email Order
            Route::get('/email-order', [EmailOrderController::class, 'index'])->name('app.settings.email-order.index');
            Route::post('/email-order', [EmailOrderController::class, 'store'])->name('app.settings.email-order.store');
            Route::get('/email-order/{id}/edit', [EmailOrderController::class, 'edit'])->name('app.settings.email-order.edit');
            Route::put('/email-order/{id}/update', [EmailOrderController::class, 'update'])->name('app.settings.email-order.update');
            Route::delete('/email-order/{id}/destroy', [EmailOrderController::class, 'destroy'])->name('app.settings.email-order.destroy');

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
