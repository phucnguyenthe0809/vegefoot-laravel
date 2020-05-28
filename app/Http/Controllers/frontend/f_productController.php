<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class f_productController extends Controller
{
    function getProductList()
    {
        return view('frontend.shop');
    }
    
    function getWithList()
    {
        return view('frontend.with-list');
    }
    
    function getProductDetail()
    {
        return view('frontend.product-detail');
    }
}
