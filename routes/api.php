<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\Api\PlantsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('plants', [PlantsController::class, 'index']);
Route::get('plants/{id}', [PlantsController::class, 'show']);
Route::post('store-plant', [PlantsController::class, 'store']);
Route::put('update-plant/{id}', [PlantsController::class, 'update']);
Route::get('delete-plant/{id}', [PlantsController::class, 'destroy']);

Route::get('orders', [OrdersController::class, 'index']);
Route::get('previous-orders', [OrdersController::class, 'prevOrders']);
Route::get('orders/{id}', [OrdersController::class, 'view']);
Route::post('make-order', [OrdersController::class, 'makeOrder']);
Route::put('update-order/{id}', [OrdersController::class, 'update']);
Route::get('remove-order/{id}', [OrdersController::class, 'destroy']);

Route::get('cart', [CartController::class, 'cartList']);
Route::get('cart/{id}', [CartController::class, 'viewCart']);
Route::post('store-cart', [CartController::class, 'addToCart']);
Route::post('update-cart-item/{id}', [CartController::class, 'updateCart']);
Route::get('remove-cart-item/{id}', [CartController::class, 'removeCart']);
//Route::post('clear-cart', [CartController::class, 'clearAllCart']);
