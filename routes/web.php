<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SignUpController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\ShipmentsController;
use App\Http\Controllers\AuthController;


// FRONTEND
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/products', [FrontendController::class, 'products']);
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/signup', [FrontendController::class, 'signup']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/trackorder', [FrontendController::class, 'trackorder']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// BACKEND
Route::prefix('backend')->middleware(["auth"])->group(function () {
    // Route::resource('clients', ClientsController::class);
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('products/grid', [ProductsController::class, 'grid']);
    Route::get('orders/list', [OrdersController::class, 'listView']);
    Route::get('shipments', [ShipmentsController::class, 'ship']);
    Route::resource('signup', SignUpController::class);
});
