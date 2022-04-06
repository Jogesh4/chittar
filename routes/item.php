<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/item/{item}', [ItemController::class, 'show'])->name('item.show');
Route::get('/add_favorite', [ItemController::class, 'add_favorite'])->name('add_favorite');
Route::post('/save_review', [ItemController::class, 'save_review'])->name('save_review');
Route::post('/edit_review', [ItemController::class, 'edit_review'])->name('edit_review');
Route::get('/get_variant', [ItemController::class, 'get_variant'])->name('get_variant');
