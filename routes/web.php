<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::get('/testt',[HomeController::class,'test'])->name('testt');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/',[HomeController::class,'index']);
    Route::get('/test',[HomeController::class,'test'])->name('test');
});