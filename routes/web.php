<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Backend\ClientsController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SignUpController;



// FRONTEND
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);

// BACKEND
Route::prefix('backend')->group(function () {
    // Route::resource('clients', ClientsController::class);
    Route::get('product/grid', [ProductsController::class, 'grid']);
    Route::resource('signup', SignUpController::class);
});
