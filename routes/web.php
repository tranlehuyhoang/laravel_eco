<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
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
});
