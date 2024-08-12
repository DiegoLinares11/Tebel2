<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.index')
            ->with('mensaje', "Sobre nosotros");
    }

    public function contact()
    {
        return view('frontend.index')
            ->with('mensaje', "Llamame!");
    }
}
