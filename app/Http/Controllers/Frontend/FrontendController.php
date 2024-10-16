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

    public function signup()
    {
        return view('frontend.signup');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function trackorder()
    {
        return view('frontend.trackorder');
    }

    public function profile(){
        return view('frontend.profile');
    }
}
