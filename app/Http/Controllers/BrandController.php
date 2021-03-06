<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showAddBrandForm(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/add-brand')->with('message','Brand info save successfully !!');
    }
    public function showBrandManageTable(){
        $brands = Brand::orderBy('id','desc')->get();
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }
}
