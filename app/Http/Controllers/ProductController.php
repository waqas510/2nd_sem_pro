<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
        $res = DB::select("SELECT * FROM `tbl_category`");
        return view('Admin.product-create', ['res'=> $res]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'pro_name' => 'required | string',
            'pro_des' => 'required | string',
            'catId' => 'required | integer',
            'pro_image' => 'required | image|mimes:png,jpg,jpeg',
        ]);

        //image move/upload
        // if($request->hasFile('pro_image'))
        // {
        //     $file = $request->file('pro_image');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = 'Song'.'-'.time().'.'.$extension;
        //     $file->move(public_path('Admin/img/pro-images/'), $fileName);
        // }
        // else{
        //     $fileName = null;
        //     return redirect()->back()->with('alert', 'Image file not uploaded!');
        // }
            $imageName = 'Song'.'-'.time().'.'.$request->pro_image->extension();
            $request->pro_image->move(public_path('Admin/img/pro-images/'), $imageName);


        //Data Save
        Product::create([
            'pro_name' => $request->pro_name,
            'pro_des' => $request->pro_des,
            'catId' => $request->catId,
            'pro_image' => $request->$imageName,
        ]);
        return redirect()->route('product.create')->with('success','Product Created successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
