<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product; 

class ProductsController extends Controller
{
    public function index()
    {
        // Obtener los productos y paginarlos
        $products = Product::paginate(12); // Define cuántos productos mostrar por página

        // Retornar la vista del frontend con los productos
        return view('frontend.products', compact('products'));
    }
}
