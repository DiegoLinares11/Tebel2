<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function index()
    {
        // Recupera todos los productos del carrito
        $cartItems = DB::table('cart')->get();

        // Retorna la vista del carrito con los productos
        return view('frontend.shop-cart', compact('cartItems'));
    }
}
