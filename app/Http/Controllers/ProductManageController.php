<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\product_categories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductManageController extends Controller
{
    function ProductManage (){
        $product = product::all();
        $category = product_categories::all();
        return view('admin/productmanagement',compact('product','category'));
    }
    function ProductManage_add (){
        $product = product::all();
        $category = product_categories::all();
        return view('admin/productmanagement_add',compact('product','category'));
    }
    function Product_add (Request $request){
        $product = new product;
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_stock = $request->input('product_stock');
        $product->product_detail = $request->input('product_detail');
        $product->product_cost = $request->input('product_cost');
        $product->promotion_discount = $request->input('promotion_discount');
        $product->promotion_start = $request->input('promotion_start');
        $product->promotion_end = $request->input('promotion_end');
        $product->promotion_start = $request->input('promotion_start');
        $product->category_id = $request->input('category_id');

        $product->save();
        return redirect()->back()->with('status','เพิ่มให้ละ');
    }
    
}
