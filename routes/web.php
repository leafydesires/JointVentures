<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;


/*

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

//Home Controller and route
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//Products
Route::get('/products/products', 'App\Http\Controllers\ProductsController@products')->name('products.products');

//Single Product
Route::get('/products/show', 'App\Http\Controllers\ShowController@show')->name('products.show');

//Cart
Route::get('/shopping/cart', 'App\Http\Controllers\CartController@cart')->name('shopping.cart');

//Checkout
Route::get('/checkout/checkout', 'App\Http\Controllers\CheckoutController@checkout')->name('checkout.checkout');






//Authentication

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin Dash
Route::middleware('auth','role:administrator')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Dashboard')->name('admin.dashboard');
        Route::get('/admin/messages', 'ContactMessages')->name('admin.messages');
        Route::get('/admin/create-category', 'CreateCategory')->name('admin.createcategory');
        Route::post('/admin/store-category', 'StoreCategory')->name('admin.storecategory');
        Route::get('/admin/all-category', 'AllCategory')->name('admin.allcategory');
        Route::get('/admin/create-sub-category', 'CreateSubCategory')->name('admin.createsubcategory');
        Route::get('/admin/all-sub-category', 'AllSubCategory')->name('admin.allsubcategory');
        Route::get('/admin/create-brands', 'CreateBrands')->name('admin.createbrands');
        Route::get('/admin/all-brands', 'AllBrands')->name('admin.allbrands');
    });

    //Products

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/add-product', 'AddProduct')->name('admin.addproduct');
        Route::get('/admin/all-products', 'AllProducts')->name('admin.allproducts');
    });

});

require __DIR__.'/auth.php';
