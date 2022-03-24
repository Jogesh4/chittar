<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user_dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
Route::get('/user_order_list', [UserController::class, 'order_list'])->name('user_order_list');
Route::get('/user_order_detail/{id}', [UserController::class, 'order_detail'])->name('user_order_detail');
Route::get('/user_last_order', [UserController::class, 'last_order'])->name('user_last_order');
Route::get('/user_cart', [UserController::class, 'cart'])->name('user_cart');
Route::get('/user_profile', [UserController::class, 'profile'])->name('user_profile');
