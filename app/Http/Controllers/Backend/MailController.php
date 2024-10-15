<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\BillTest;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {

        $correo = $request->input('correo');


       $mail = Mail::to([$correo])->send(new BillTest());

    }
}
