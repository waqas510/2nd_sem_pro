<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
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
Route::get('admin', [categoryController::class, 'Admin']);


// Category Work
Route::get('cat-create', [categoryController::class,'Create']);
Route::post('saveCat', [categoryController::class,'Save']);