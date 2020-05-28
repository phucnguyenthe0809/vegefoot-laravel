<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class b_adminController extends Controller
{
    function getPageAdmin()
    {
        return view('backend.admin');
    }
    
}