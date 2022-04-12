<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/place', [OrderController::class, 'place'])->name('order.place');
Route::put('/cancel/{order}', [OrderController::class, 'cancel'])->name('order.cancel');

Route::get('/select-address', [OrderController::class, 'address'])->name('select.address');
Route::post('/save-address', [OrderController::class, 'save_address'])->name('save.address');
Route::post('/update-order-status', [OrderController::class, 'update_order_status'])->name('update_order_status');
Route::get('/payment_method/{id}', [OrderController::class, 'payment'])->name('payment_method');
