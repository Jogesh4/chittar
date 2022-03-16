<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('add-to-cart/{item}', [CartController::class, 'add_to_cart'])->name('add.to.cart');
Route::post('remove-from-cart', [CartController::class, 'remove_from_cart'])->name('remove.from.cart');