<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('change_status/{type}{id}{status}', [App\Http\Controllers\Admin\ItemController::class, 'change_status'])->name('change_status');
Route::get('autocomplete', [App\Http\Controllers\ItemController::class, 'autocomplete'])->name('autocomplete');
Route::get('/manage-reviews', [App\Http\Controllers\Admin\ItemController::class, 'manage_reviews'])->name('manage-reviews');
Route::get('/manage-shippings', [App\Http\Controllers\Admin\HomeController::class, 'manage_shippings'])->name('manage-shippings');
Route::get('/shippings/{id}/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit_shippings'])->name('shippings.edit');
Route::post('/shippings/store', [App\Http\Controllers\Admin\HomeController::class, 'store_shippings'])->name('shippings.store');
Route::post('/shippings/update', [App\Http\Controllers\Admin\HomeController::class, 'update_shippings'])->name('shippings.update');
Route::view('/shippings/create', 'admin.shipping.create')->name('shippings.create');
Route::view('/report', 'admin.report.sale-report');
Route::view('/customer-report', 'admin.report.customer-report');
Route::view('/special-price', 'admin.price.special-price');


require __DIR__.'/cart.php';
require __DIR__.'/search.php';
require __DIR__.'/order.php';
require __DIR__.'/item.php';
require __DIR__.'/category.php';
require __DIR__.'/user.php';



