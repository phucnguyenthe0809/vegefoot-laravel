<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class f_postController extends Controller
{
    function getPostList()
    {
        return view('frontend.blog.blog-list');
    }
    
    function getPostDetail()
    {
        return view('frontend.blog.blog-detail');
    }
   
}
