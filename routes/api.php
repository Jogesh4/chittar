<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('categories', [CategoryController::class, 'index']);
Route::get('items-by-category', [ItemController::class, 'itemsByCategory']);
Route::get('item-by-id', [ItemController::class, 'itemByID']);

Route::get('get-variant', [ItemController::class, 'get_variant']);


Route::post('add-cart', [CartController::class, 'add_to_cart']);
Route::get('view-cart', [CartController::class, 'view_cart']);
Route::get('delete-cart', [CartController::class, 'delete_cart']);
Route::get('remove-item-from-cart', [CartController::class, 'remove_item_from_cart']);

Route::post('add-address', [OrderController::class, 'add_address']);
Route::get('view-address', [OrderController::class, 'view_address']);

Route::post('place-order', [OrderController::class, 'place']);
Route::get('user-orders', [OrderController::class, 'userOrders']);
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
