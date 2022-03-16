<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/item/{item}', [ItemController::class, 'show'])->name('item.show');