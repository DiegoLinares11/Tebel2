<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SignUpController;
use App\Http\Controllers\Backend\OrdersController;


// FRONTEND
Route::get('/', [FrontendController::class, 'index']);
Route::get('/products', [FrontendController::class, 'products']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/signup', [FrontendController::class, 'signup']);
Route::get('/login', [FrontendController::class, 'login']);
Route::get('/about', [FrontendController::class, 'about']);

// BACKEND
Route::prefix('backend')->group(function () {
    // Route::resource('clients', ClientsController::class);
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('products/grid', [ProductsController::class, 'grid']);
    Route::get('orders/list', [OrdersController::class, 'listView']);
    Route::resource('signup', SignUpController::class);
});
