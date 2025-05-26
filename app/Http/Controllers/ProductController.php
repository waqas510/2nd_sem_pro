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
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $res = DB::select("SELECT * FROM `categories`");
        return view('Admin.product-create', ['res'=> $res]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'song_name' => 'required|string',
        'song_des' => 'required|string',
        'catid' => 'required|integer',
    ]);

    $data = $request->all();
    if ($request->hasFile('song')) {
        $songName = 'Song-'.time().'.'.$request->song->getClientOriginalExtension();
        $request->song->move(public_path('Admin/Music/'), $songName);
        $data['song']=$songName;
    }

        product::create($data);
        return redirect()->route('product.show')->with('success', 'Product Created successfully!');
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
        $cat = DB::select("SELECT * FROM `categories`");
        return view('Admin.product-edit',compact('product','cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $data = $request->all();
    if ($request->hasFile('song')) {
        $songName = 'Song-'.time().'.'.$request->song->getClientOriginalExtension();
        $request->song->move(public_path('Admin/Music/'), $songName);
        $data['song']=$songName;
    }

        $product->update($data);
        return redirect()->route('product.show')->with('success', 'Product Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.show')->with('success', 'Product Deleted successfully!');
    }
}
