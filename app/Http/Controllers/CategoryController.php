<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function showAddCategoryForm(){
       return view('admin.category.add-category');
   }
   public function saveCategoryInfo(Request $request){
       $category = new Category();
       $category->category_name =$request->category_name;
       $category->category_description =$request->category_description;
       $category->publication_status =$request->publication_status;
       $category->save();
       return redirect('/category/add-category')->with('message','Category info save successfully !!');
   }
   public function showCategoryManageTable(){
       $categories = Category::orderBy('id','desc')->get();

       return view('admin.category.manage-category',['categories'=>$categories]);
   }
}
