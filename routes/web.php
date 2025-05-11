<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'homePage']);
Route::get('index', [homeController::class, 'homePage']);
Route::get('contact', [homeController::class, 'contactPage']);
Route::get('about', [homeController::class, 'aboutPage']);
