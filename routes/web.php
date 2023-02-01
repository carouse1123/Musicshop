<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductManageController;
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


Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
     Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
     Route::get('/productmanage',[ProductManageController::class, 'ProductManage'])->name('productmanage');
     Route::get('/addproduct',[ProductManageController::class, 'ProductManage_add'])->name('productmanage_add');
     Route::post('/addproduct',[ProductManageController::class, 'Product_add'])->name('product_add');
});

Route::middleware('auth')->group(function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('/productt',[HomeController::class,'product'])->name('productt');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/home',[HomeController::class, 'index'])->name('home');
//     Route::get('/testt',[HomeController::class,'test'])->name('testt');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home1');
    Route::get('/product',[HomeController::class,'product'])->name('product');
});