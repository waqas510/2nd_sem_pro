<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.catCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('cat_img'))
        {
            $fileName = 'Category-'.time().'.'.$request->cat_img->getClientOriginalExtension();
            $request->cat_img->move(public_path('Admin/img/cat-images/'), $fileName);
            $data['cat_img']=$fileName;
        }
        else{
            $fileName = null;
            return redirect()->back()->with('alert', 'Image file not uploaded!');
        }
        category::create($data);
        return redirect()->route('cat-show')->with('success', 'Category Created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        $data = $category->all();
        return view('Admin.cat-show', ['res'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        $cat = $category->all();
        return view('Admin.category-edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $data = $request->all();
        if($request->hasFile('cat_img'))
        {
            $fileName = 'Category-'.time().'.'.$request->cat_img->getClientOriginalExtension();
            $request->cat_img->move(public_path('Admin/img/cat-images/'), $fileName);
            $data['cat_img']=$fileName;
        }
        else{
            $fileName = null;
            return redirect()->back()->with('alert', 'Image file not uploaded!');
        }
        category::create($data);
        return redirect()->route('cat-show')->with('success', 'Category Created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
