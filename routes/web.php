<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',  [App\Http\Controllers\Admin\DashboardController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::controller(CategoryController::class)->group(function () {
        Route::get('category',   'getAllCategories');
        Route::get('category/create',  'create');
        Route::get('category/{category}/edit',  'edit');
        Route::post('category', 'store')->name('create_category');
        Route::put('category/{category}', 'update')->name('edit_category');
        Route::get('category/{category}/delete', 'destroy');
    });
    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand', 'index');
        Route::post('/brand', 'store')->name('brand.create');
        Route::put('brand/{brand}', 'update')->name('brand.update');
        Route::get('brand/{brand}/delete', 'destroy');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'index');
        Route::get('product/create', 'create');
        Route::get('product/{product}/edit',  'edit');

        Route::post('product', 'store')->name('product.create');
        Route::put('product/{product}', 'update');
        Route::get('product-image/{product_image_id}/delete', 'destroyImg');
        Route::get('product/{product}/delete', 'destroy');
        Route::post('product-color/{prd_color_id}', 'updateProductColorQty');
        Route::post('product-color/{prd_color_id}/delete', 'deleteProductColorButon');
    });
    Route::controller(ColorController::class)->group(function () {
        Route::get('color', 'index');
        Route::get('color/create', 'create');
        Route::post('color', 'store');

        Route::get('color/{color}/edit',  'edit');
        Route::put('color/{color}', 'update');

        Route::get('color/{color}/delete', 'destroy');
    });
    Route::controller(SliderController::class)->group(function () {
        Route::get('slider', 'index');
        Route::get('slider/create', 'create');
        Route::post('slider', 'store');

        Route::get('slider/{slider}/edit',  'edit');
        Route::put('slider/{slider}', 'update');

        Route::get('slider/{slider}/delete', 'destroy');
    });
});
