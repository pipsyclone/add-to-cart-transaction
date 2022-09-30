<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProsesController;

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

Route::controller(ProsesController::class)->group(function () {
    Route::get('/', 'produk')->name('produk');
    Route::get('/add-to-cart/view', 'cartView')->name('addToCartView');
    Route::get('/add-to-cart/proses/{productid}', 'addToCartProses')->name('addToCartProses');
    Route::get('/add-to-cart/delete/{cartid}', 'cartDelete')->name('cartDelete');
    Route::get('/checkout/{username}', 'checkout')->name('checkout');
});
