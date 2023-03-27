<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\product_categories;
use Products;

class HomeController extends Controller
{
    //for homepage
    function index(){
        $product = product::all();
        $category = product_categories::all();
        return view('home',compact('product','category'));
    }
    function product(){
        $product = product::all();
        $sidebarcate = product_categories::all();
        return view('product',compact('product','sidebarcate'));
    }
    function productdetail($id){
        $product = product::find($id);
        $category = product_categories::find($product->category_id);
        return view('productdetail',compact('product','category'));
    }

    function category($id){
        $sidebarcate = product_categories::all();
        $product = product::where('category_id',$id)->get();
        $category = product_categories::find($id);
        return view('category',compact('product','category','sidebarcate'));
    }
    function cart(){
        return view('cart');
    }
    function addTocart(product $product){
        $cart = session()->get('cart');
        
        if(!$cart){
            $cart= [
                $product->id=>[
                    'name' => $product->product_name,
                    'quantity' => 1,
                    'price' => $product->product_price
                ]
            ];
            session()->put('cart',$cart);
            return redirect()->route('cart')->with('success',"เพิ่มสินค้าเรียบร้อย");
        }

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success',"เพิ่มสินค้าเรียบร้อย");
        }
        $cart[$product->id] = [
            'name' => $product->product_name,
            'quantity' => 1,
            'price' => $product->product_price
        ];
        session()->put('cart',$cart);
        return redirect()->route('cart')->with('success',"เพิ่มสินค้าเรียบร้อย");
    }
    function removecart($id){
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success',"ลบสินค้าเรียบร้อย");
    }
};
