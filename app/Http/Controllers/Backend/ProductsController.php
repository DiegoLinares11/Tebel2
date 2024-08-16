<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        dd("BACKEND PRODUCTS");
    }
    public function grid()
    {
        return view('backend.product-grid');
    }
}
