<?php

/*
|--------------------------------------------------------------------------
| POS Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PosController;

// Regular User Routes
Route::get('/pos/products', [PosController::class, 'search'])->name('pos.search_product');
Route::get('/variants', [PosController::class, 'getVarinats'])->name('variants');
Route::post('/add-to-cart-pos', [PosController::class, 'addToCart'])->name('pos.addToCart');
Route::post('/update-quantity-cart-pos', [PosController::class, 'updateQuantity'])->name('pos.updateQuantity');
Route::post('/remove-from-cart-pos', [PosController::class, 'removeFromCart'])->name('pos.removeFromCart');
Route::post('/get_shipping_address', [PosController::class, 'getShippingAddress'])->name('pos.getShippingAddress');
Route::post('/get_shipping_address_seller', [PosController::class, 'getShippingAddressForSeller'])->name('pos.getShippingAddressForSeller');
Route::post('/setDiscount', [PosController::class, 'setDiscount'])->name('pos.setDiscount');
Route::post('/setShipping', [PosController::class, 'setShipping'])->name('pos.setShipping');
Route::post('/pos-order', [PosController::class, 'order_store'])->name('pos.order_place');
Route::post('/set-address', [PosController::class, 'set_shipping_address'])->name('pos.set-shipping-address');

Route::get('/pos_activation', [PosController::class, 'pos_activation'])->name('pos.configuration');
Route::post('/getOrderSummary', [PosController::class, 'get_order_summary'])->name('pos.getOrderSummary');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    //pos
    Route::get('/pos', [PosController::class, 'admin_index'])->name('poin-of-sales.index');
    Route::get('/pos-activation', [PosController::class, 'pos_activation'])->name('poin-of-sales.activation');
});

// Seller Routes
Route::group(['prefix' => 'seller', 'middleware' => ['seller', 'verified']], function () {
    //pos
    Route::get('/pos', [PosController::class, 'seller_index'])->name('poin-of-sales.seller_index');
});
