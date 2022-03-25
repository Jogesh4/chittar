<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('add-to-cart/{item}', [CartController::class, 'add_to_cart'])->name('add.to.cart');
Route::post('remove-from-cart', [CartController::class, 'remove_from_cart'])->name('remove.from.cart');
Route::post('remove-item-from-cart', [CartController::class, 'remove_item_from_cart'])->name('remove.item.from.cart');
Route::get('add_cart_quantity', [CartController::class, 'add_cart_quantity'])->name('add_cart_quantity');
Route::get('minus_cart_quantity', [CartController::class, 'minus_cart_quantity'])->name('minus_cart_quantity');