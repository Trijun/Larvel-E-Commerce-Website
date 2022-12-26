<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    
    function index()
    {
        $products = Product::all();
        return view('footer',['products'=>$products[0]]);
      
    }
}
