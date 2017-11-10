<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Category;
use App\Customer;
use App\Product;
use App\SubImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;
use DB;


class WelcomeController extends Controller
{
    public function index(){
        $products = Product::where('publication_status',1)->orderBy('id','desc')->take(10)->get();
        return view('front.home.home-content', ['products'=>$products]);
    }
    public function showProductCategory($id){
        $products = Product::where('category_id',$id)->get();
        return view('front.product.product-item',['products'=>$products ]);
    }
    public function showProductItem(){
        return view('front.product.product-item');
    }
    public function showProductDetails($id){
//        $product = Product::find($id);
//        return $product;
        $product = DB::table('products')
                      ->join('categories','products.category_id', '=', 'categories.id')
                     ->join('brands','products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.category_name','brands.brand_name')
                    ->where('products.id',$id)
                   ->first();
        $subImages = SubImage::where('product_id',$id)->get();
        return view('front.product.product-details',['products'=>$product,
            'subImages' => $subImages
            ]);
    }


    public function showPostAdsUsForm(){
        $categories = Category::where('publication_status',1)->get();
        $brands =Brand::where('publication_status',1)->get();
        return view('front.form.post-ad-form',[
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function showSignInForm(){
        return view('front.form.signin-form');
    }
    public function showSignUpInForm(){
        return view('front.form.signup-form');
    }
    public function showContactUsForm(){
        return view('front.form.contact-form');
    }


    public function saveUserInfo(Request $request){
        $this->validate($request,[
           'name' => 'required|regex:/^[\pL\s\-]+$/u',
           'email' => 'required|unique:customers',
           'phone' => 'required',
           'password' => 'required|min:6',
           'retype_password' => 'required|same:password'
        ]);

       $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->save();

         Session::put('customer_id',$customer->id);
         Session::put('customer_name',$customer->name);

         return redirect('/');
    }

    public function customerLogout(){
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }

    public function customerSignIn(Request $request){

        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $customerInfo = DB::table('customers')
                        ->select('email','password','name','id')
                        ->where('email', Input::get('email'))
                        ->first();


         if($customerInfo && Hash::check(Input::get('password'),$customerInfo->password)){
             Session::put('customer_id',$customerInfo->id);
             Session::put('customer_name',$customerInfo->name);

             return redirect('/');
         }


         return redirect()->back();




    }


    public function newRegistration(){
        return view('front.welcome.welcome');
    }

}
