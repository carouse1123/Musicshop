<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductManageController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/cart',[HomeController::class, 'cart'])->name('cart');
    Route::get('/add-to-cart/{product}',[HomeController::class, 'addTocart'])->name('addcart');
    Route::get('/remove/{id}',[HomeController::class, 'removecart'])->name('removecart');
});

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    /*จัดการสินค้า*/
    Route::get('/productmanage', [ProductManageController::class, 'ProductManage'])->name('productmanage');
    Route::get('/addproduct', [ProductManageController::class, 'ProductManage_add'])->name('productmanage_add');
    Route::post('/addproduct', [ProductManageController::class, 'Product_add'])->name('product_add');
    Route::get('/editproduct/{id}', [ProductManageController::class, 'ProductManage_edit']);
    Route::put('/updateproduct/{id}', [ProductManageController::class, 'ProductManage_update']);
    // Route::get('/deleteproduct/{id}', [ProductManageController::class, 'ProductManage_delete']);

    /*จัดการหมวดหมู่*/
    Route::get('/categorymanage', [ProductManageController::class, 'CategoryManage'])->name('categorymanage');

});



Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/productdetail/{id}',[HomeController::class, 'productdetail'])->name('productdetail');
Route::get('/category/{name}',[HomeController::class, 'category'])->name('category');
