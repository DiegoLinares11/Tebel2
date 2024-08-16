<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}