<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::post('/place', [OrderController::class, 'place'])->name('order.place');
Route::put('/cancel/{order}', [OrderController::class, 'cancel'])->name('order.cancel');

Route::get('/select-address', [OrderController::class, 'address'])->name('select.address');
Route::post('/save-address', [OrderController::class, 'save_address'])->name('save.address');
Route::get('/payment_method/{id}', [OrderController::class, 'payment'])->name('payment_method');
