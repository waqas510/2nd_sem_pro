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
        $products = product::with('category')->get();
        return view('index', compact('$products'));
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
    $request->validate([
        'pro_name' => 'required|string',
        'pro_des' => 'required|string',
        'catId' => 'required|integer',
        
    ]);

    $data = $request->all();

    

    if ($request->hasFile('pro_audios')) {
        $audioName = 'Song-'.time().'.'.$request->pro_audios->getClientOriginalExtension();
        $request->pro_audios->move(public_path('Admin/Music/'), $audioName);
        $data['pro_audios']=$audioName;
    }

        product::create($data);
        
    

     return redirect()->back()->with('success', 'Product Created successfully!');
}
    /**
     * Display the specified resource.
     */
    public function show(request $request)
    {
        $data = DB::table('products')->get(); 
        return view('Admin.product-show', ['res'=> $data]);
    
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
