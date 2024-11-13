<?php

use App\Http\Controllers\Api\DishController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::get('/dishes', [DishController::class, 'index']);

Route::get('/payment/token', [PaymentController::class, 'generateClientToken']);
Route::post('/payment/submit', [PaymentController::class, 'processPayment']);

Route::post('/orders', [OrderController::class, 'createOrder']);
Route::get('/orders', [OrderController::class, 'getOrders']);