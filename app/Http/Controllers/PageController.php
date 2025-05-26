<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Admin.adminindex');
    }
    public function Home(){
        return view('index');
    }
    public function About(){
        return view('about');
    }
    public function Discography(){ 
        return view('descography');
    }
    public function Tours(){
        return view('tours');
    }
    public function Videos(){
        return view('videos');
    }
    public function Contact(){
        return view('contact');
    }
    
}
