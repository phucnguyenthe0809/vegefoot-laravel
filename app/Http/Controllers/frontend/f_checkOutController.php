<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class f_checkOutController extends Controller
{
    function getCheckout()
    {
        return view('frontend.checkout');
    }
}
