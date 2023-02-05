<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_categories;

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
    function productdetail($id){
        $product = product::find($id);
        $category = product_categories::find($product->category_id);


        return view('productdetail',compact('product','category'));
    }
};
