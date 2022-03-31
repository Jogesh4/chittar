<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::post('/place', [OrderController::class, 'place'])->name('order.place');
Route::put('/cancel/{order}', [OrderController::class, 'cancel'])->name('order.cancel');

Route::get('/select-address', [OrderController::class, 'address'])->name('select.address');
