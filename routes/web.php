<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminTransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminSetSlideshowController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ProductController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// --- USER --- //
Route::get('/', [HomeController::class, 'index']);
Route::get('/pricelist', [PriceListController::class, 'index']);
Route::get('/about-us', AboutUsController::class);
Route::get('/p/{prd_slug}', [ProductController::class, 'index']);
Route::post('/p/{prd_slug}/store', [ProductController::class, 'store']);
Route::get('/transaction/{ts_code}', [ProductController::class, 'transaction']);
Route::put('/transaction/{ts_code}/confirm', [ProductController::class, 'confirm']);
Route::get('/transaction/{ts_code}/thankyou', [ProductController::class, 'thankyou']);


Route::middleware('guest')->group(function () {
    // --- ADMINISTRATOR --- //
    Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/admin-login', [AdminLoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    // --- ADMINISTRATOR --- //
    Route::get('/a/dashboard', [AdminHomeController::class, 'index'])->name('adminHome');
    Route::post('/a/logout', [AdminLoginController::class, 'destroy'])->name('logout');

    Route::resource('/a/s/slideshow', AdminSetSlideshowController::class);
    Route::get('/a/transaction', [AdminTransactionController::class, 'index'])->name('transaction');
    // Route::get('/a/game', [AdminProductController::class, 'index'])->name('game');


    Route::resource('/a/product', AdminProductController::class);
    // Route::get('/a/product/{product}/edit', [AdminProductController::class, 'edit'])->name('product.edit');
});
