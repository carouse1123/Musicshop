<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_category;

class HomeController extends Controller
{
    //for homepage
    function index(){
        $product = product::all();
        return view('home',compact('product'));
    }
    function product(){
        $product = product::all();
        return view('product',compact('product'));
    }
};
