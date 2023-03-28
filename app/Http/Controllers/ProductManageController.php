<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_categories;
use App\Models\product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ProductManageController extends Controller
{
    function ProductManage (){
        $product = product::all();
        $product_image = product_image::all();
        $category = product_categories::all();
        return view('admin/productmanagement',compact('product','category','product_image'));
    }
    function ProductManage_add (){
        $product = product::all();
        $category = product_categories::all();
        return view('admin/productmanagement_add',compact('product','category'));
    }
    function Product_add (Request $request){
        // $this->validate($request, [
        //     'filename' => 'required',
        //     'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);
        //เพิ่มสินค้า
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

        //เพิ่มรูปสินค้า
        
        if($request->hasFile('filename')){
            $uploadPath = public_path('images_product');
            $file = $request->file('filename');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extention;
            $file->move($uploadPath,$filename);
            $finalImagePathName = $uploadPath.'/'.$filename;

            $image_product = new product_image;
            $image_product->product_id = $product->id;
            $image_product->name = $filename;
            $image_product->path = $finalImagePathName;
            $image_product->save();
        }
        return redirect()->back()->with('status','เพิ่มให้ละ');  
    }

    function ProductManage_edit($id){
        $product = product::find($id);
        $category = product_categories::find($product->category_id);
        $categories = product_categories::all();
        return view('admin/productmanagement_edit',compact('product','category','categories'));
    }

    function ProductManage_update(Request $request, $id){
        $product = product::find($id);
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
        $product->update();

        //แก้ไขรูป
        if ($request->hasFile('filename')) {
            $destination = 'images_product/' . $product->product_image->first()->name;
            if (File::exists($destination)){
                File::delete($destination);
            }
            $uploadPath = public_path('images_product');
            $file = $request->file('filename');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extention;
            $file->move($uploadPath,$filename);
            $finalImagePathName = $uploadPath.'/'.$filename;

            $image_product = product_image::find($product->product_image->first()->id);
            $image_product->product_id = $product->id;
            $image_product->name = $filename;
            $image_product->path = $finalImagePathName;
            $image_product->update();
        }


        return redirect()->back()->with('status','แก้ไขให้ละ');  
    }

    function ProductManage_delete($id){
        // $product = product::find($id);
        $product = product::destroy($id);
        return redirect()->back();
    }

    function CategoryManage(){
        $product = product::all();
        $categories = product_categories::all();
        return view('admin/categorymanagement',compact('product','categories'));
    }
    
}
