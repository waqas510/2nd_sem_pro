<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homePage()
    {
        return view('index');
    }
    public function contactPage()
    {
        return view('contact');
    }
    public function aboutPage()
    {
        return view('about');
    }
    public function toursPage()
    {
        return view('tours');
    }
}
