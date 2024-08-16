<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function grid()
    {
        return view('backend.product-grid');
    }
}
