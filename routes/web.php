<?php

use App\Http\Controllers\Backend\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SignUpController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\ShipmentsController;
use App\Http\Controllers\Backend\SingleProductController;
use App\Http\Controllers\ProductController;


// FRONTEND
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/signup', [FrontendController::class, 'signup'])->name('signup');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/trackorder', [FrontendController::class, 'trackorder'])->name('trackorder');
Route::get('/singleproduct/{id}', [FrontendController::class, 'singleproduct'])->name('singleproduct');
Route::get('/products', [ProductsController::class, 'index'])->name('frontend.products.index');

Route::get("/test", [MailController::class, 'sendMail']);
Route::get('/backend/products', [ProductsController::class, 'index'])->name('products');

// BACKEND
Route::prefix('backend')->group(function () {
    // Route::resource('clients', ClientsController::class);
    Route::get('enviarfactura', [MailController::class, 'sendMail']);
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('products/grid', [ProductsController::class, 'grid']);
    Route::get('orders/list', [OrdersController::class, 'listView']);
    Route::get('shipments', [ShipmentsController::class, 'ship']);
    Route::resource('signup', SignUpController::class);
    Route::get('singleproduct', [SingleProductController::class, 'singleproduct']);
    
});
