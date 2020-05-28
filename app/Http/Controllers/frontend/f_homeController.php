<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class f_homeController extends Controller
{
   function getIndex()
   {
       return view('frontend.index');
   }

   function getAbout()
   {
      return view('frontend.about');
   }
   
   function getContact()
   {
      return view('frontend.contact');
   }
}
