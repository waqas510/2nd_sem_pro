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
        'pro_audios' => 'required|file|mimes:mp3,wav,ogg|max:10240',
    ]);

    $data = $request->all();

    if ($request->hasFile('pro_audios')) {
        $audioName = 'Song-'.time().'.'.$request->pro_audios->getClientOriginalExtension();
        $request->pro_audios->move(public_path('Admin/img/pro_audios'), $audioName);
        $data['pro_audios']=$audioName;
    }

        product::create($data);
        
    // Product::create([
    //     'pro_name' => $request->pro_name,
    //     'pro_des' => $request->pro_des,
    //     'catId' => $request->catId,
    //     'pro_audios' => $audioName,
    // ]);

    return redirect()->end()->with('success', 'Product Created successfully!');
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
