<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function singleproduct()
    {
        return view('backend.singleproduct'); // Asegúrate de que la vista existe
    }
}