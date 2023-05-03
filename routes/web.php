<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::middleware("auth")->group(function () {
    Route::get('product', [ProductController::class, 'index']);
    Route::get('products/{product}', [ProductController::class, 'show'])->name("products.show");
    Route::post('subscription', [ProductController::class, 'subscription'])->name("subscription.create");
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
