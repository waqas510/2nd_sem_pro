<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required|string',
        ];
        $validator = Validator::make($request->all(), [$rules]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
            contact::create($request->all());
            return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data = $contact->all();
        return view('Admin.message', ['res'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        $contact->delete();
        return redirect()->route('message')->with('success', 'message Deleted successfully!');
    }
}
