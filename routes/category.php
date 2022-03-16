<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/category/{category?}', [CategoryController::class, 'index'])->name('category.index');