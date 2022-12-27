<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/product', [ProductController::class, 'index']);

Route::post('/product', [ProductController::class, 'store']);


Route::get('/cart', [ProductController::class, 'showCart']);

Route::get('/removeItem/{id}', [ProductController::class, 'removeCartItem']);

Route::post('/updateItem', [ProductController::class, 'updateCartItem']);

Route::get('/order', [ProductController::class, 'order']);

Route::get('/my-orders', [ProductController::class, 'showOrders']);