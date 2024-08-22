<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductsController extends Controller
{
    public function import()
    {
        Excel::import(new ProductsImport, 'DatosProdin.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

    public function index()
    {
        return view('backend.index');
    }

    public function grid()
    {
        return view('backend.product-grid');
    }
}
