<?php

use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'create']);
Route::delete('products/{product}', [ProductController::class, 'destroy']);
Route::put('products/{product}', [ProductController::class, 'update']);


Route::post( '/addproduct/{cart}', [CartController::class, 'add']);
Route::get('/cart_list/{cart}', [CartController::class, 'cartListPrice']);
Route::get('/view_bill/{cart}', [CartController::class, 'viewBill']);
Route::delete('/distroy/{cart}', [CartController::class, 'distroyCart']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
