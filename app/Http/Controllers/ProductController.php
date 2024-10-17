<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product; // <-- Asegúrate de importar el modelo
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Obtén los productos con paginación
        $products = Product::paginate(9);

        // Retorna la vista con los productos
        return view('backend.product-grid', compact('products'));
    }
}
