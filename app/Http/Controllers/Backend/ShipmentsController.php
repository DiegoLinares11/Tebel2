<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function ship(){
        return view ('backend.shipments');
    }
}
