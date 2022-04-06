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

Route::get('/manage-reviews', [App\Http\Controllers\Admin\ItemController::class, 'manage_reviews'])->name('manage-reviews');
Route::view('/report', 'admin.report.sale-report');
Route::view('/customer-report', 'admin.report.customer-report');
Route::view('/special-price', 'admin.price.special-price');

require __DIR__.'/cart.php';
require __DIR__.'/search.php';
require __DIR__.'/order.php';
require __DIR__.'/item.php';
require __DIR__.'/category.php';
require __DIR__.'/user.php';



