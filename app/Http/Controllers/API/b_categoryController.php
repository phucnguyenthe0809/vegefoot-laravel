<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\category;
class b_categoryController extends Controller
{
    function getCategory($id)
    {
       return category::find($id)->parent? category::find($id)->parent->id : 0;
    }
}