<?php

use App\Http\Controllers\Auth\AuthenicatedSessionController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'homePage']);
Route::get('index', [homeController::class, 'homePage']);
Route::get('contact', [homeController::class, 'contactPage']);
Route::get('about', [homeController::class, 'aboutPage']);
Route::get('videos', [homeController::class, 'videosPage']);
Route::get('tours', [homeController::class, 'toursPage']);
Route::get('descography', [homeController::class, 'descographyPage']);
Route::get('blogdetails', [homeController::class, 'blogdetailsPage']);
Route::get('blog', [homeController::class, 'blogPage']);

// Admin Penal Work
Route::get('adminpenal', [categoryController::class, 'Admin']);


// Category Work
Route::get('cat-create', [categoryController::class,'Create']);
Route::get('cat-show', [categoryController::class,'showCat']);
Route::post('saveCat', [categoryController::class,'Save']);

Route::resource('product', ProductController::class);
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/login',function()
{
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenicatedSessionController::class,'store']);
Route::post('/logout', [AuthenicatedSessionController::class,'destroy'])->name('logout');

Route::middleware(['auth'])->get('/adminpenal',function()
{
    return view('Admin.adminindex');
})->name('adminpenal');

Route::get('/index', function()
{
    return view('index');
})->name('index');
