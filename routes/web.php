<?php

use App\Http\Controllers\Auth\AuthenicatedSessionController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Page controller Routes
Route::get('/dashboard',[PageController::class,'index'])->name('dashboard');
Route::get('/',[PageController::class,'Home'])->name('index');
Route::get('/index',[PageController::class,'Home'])->name('index'); 
Route::get('/about',[PageController::class,'About'])->name('about');
Route::get('/descography',[PageController::class,'Discography'])->name('descography');
Route::get('/tours',[PageController::class,'Tours'])->name('tours');
Route::get('/videos',[PageController::class,'Videos'])->name('videos');
Route::get('/contact',[PageController::class,'Contact'])->name('contact');


//Other category & products route
Route::post('/saveCat',[categoryController::class,'store']);
Route::get('/category/show',[categoryController::class,'show'])->name('cat-show');
Route::get('/product/show',[ProductController::class,'show'])->name('product.show');

// Resourse route Category & products
Route::resource('products',ProductController::class);
Route::resource('category',categoryController::class);


Route::get('/login',function()
{
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenicatedSessionController::class,'store']);
Route::post('/logout', [AuthenicatedSessionController::class,'destroy'])->name('logout');

Route::middleware(['auth'])->get('/dashboard',function()
{
    return view('Admin.adminindex');
})->name('dashboard');

