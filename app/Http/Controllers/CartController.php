<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order_detail;
use App\Models\product;
use App\Models\product_image;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function cart()
    {
        $cart = cart::where('user_id', Auth::id())->where('status', 0)->first();
        return view('cart', compact('cart'));
    }

    function store(Request $request)
    {
        $product = product::find($request->product_id);
        $cart = cart::where('user_id', Auth::id())->where('status', 0)->first();
        //ถ้ามีตะกร้าอยู่แล้ว
        if ($cart){
            $order_detail = $cart->order_detail()->where('product_id', $product->id)->first();
            //ถ้าในตะกร้ามีสินค้าอยู่แล้ว
            if ($order_detail) {
                $amountnew = $order_detail->amount+1;
                $order_detail->amount = $amountnew;
                $order_detail->update();
            } else {
                $order_detail = new order_detail;
                $order_detail->cart_id = $cart->id;
                $order_detail->product_id = $product->id;
                $order_detail->product_name = $product->product_name;
                $order_detail->price = $product->product_price;
                $order_detail->amount = 1;
                $order_detail->save();
            }
        } else {
            $cart = new cart;
            $cart->user_id = Auth::id();
            $cart->total = 0;
            $cart->status = 0;
            $cart->save();

            $order_detail = new order_detail;
            $order_detail->cart_id = $cart->id;
            $order_detail->product_id = $product->id;
            $order_detail->product_name = $product->product_name;
            $order_detail->price = $product->product_price;
            $order_detail->amount = 1;
            $order_detail->save();
        }

        return redirect()->back();
    }
}
