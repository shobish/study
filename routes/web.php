<?php

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\CartProduct;
use App\Models\CartProducts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CartController;

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
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[LoginController::class ,'login']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::delete('/distroy/{cart}', [CartController::class, 'distroyCart']);

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'create']);
Route::delete('products/{product}', [ProductController::class, 'destroy']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::put('products/{product}', [ProductController::class, 'update']);
Route::get('/search', [ProductController::class, 'searchProduct']);

Route::post('/addproduct/{cart}', [CartController::class, 'add']);
Route::get('/cart_list/{cart}', [CartController::class, 'cartListPrice']);

Route::get('/category', [CategoryController::class, 'index']);

