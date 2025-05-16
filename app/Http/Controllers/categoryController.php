<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
     //Admin penal
    public function Admin()
    {
        return view('Admin.index');
    }
    public function showCat()
    {
        $res = DB::select("SELECT * FROM `tbl_category`");
        return view('Admin.cat-show', ['res'=> $res]);
    }
    public function Create()
    {
        return view('Admin.cat-create');
    }
    public function Save(request $request)
    {
        $name = $request->input('catName');
        $des = $request->input('catDes');

        if($request->hasFile('catImg'))
        {
            $file = $request->file('catImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = $name.'-'.time().'.'.$extension;
            

            $file->move(public_path('Admin/img/cat-images/'), $fileName);
        }
        else{
            $fileName = null;
            return redirect()->back()->with('alert', 'Image file not uploaded!');
        }

        
        DB::insert("INSERT INTO `tbl_category`(`cat_name`, `cat_des`, `cat_img`) VALUES (?,?,?)",[$name, $des, $fileName]);
        return view('Admin.index');
    }
}
