<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\SubImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    public function showAddProductForm(){
        $categories = Category::where('publication_status',1)->get();
        $brands =Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }


    public function saveProductInfo(Request $request){

        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory ='product-images/';
        $imageUrl = $directory.$imageName;
        image::make($productImage)->save($imageUrl);


        $product = new Product();
        $product->product_title = $request->product_title;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->publication_status = $request->publication_status;

        $product->save();

        $productId = $product->id;

        $productSubImages = $request->file('product_sub_image');

        foreach ($productSubImages as $productSubImage){
            $subImageName  = $productSubImage->getClientOriginalName();
            $subImageDirectory = 'product-sub-images/';
            $subImageUrl = $subImageDirectory.$subImageName;
            image::make($productSubImage)->save($subImageUrl);

            $subImage = new SubImage();
            $subImage->product_id = $productId;
            $subImage->product_sub_image = $subImageUrl;
            $subImage->save();
        }
        if ($request->admin_post == 1){
            return redirect('/product/add-product')->with('message','Product info save successfully !!');
        }else{
            return redirect('/post-ads-form')->with('message','Product info save successfully !!');
        }

    }
    public function showProductManageTable(){
        $products  = DB::table('products')
            ->join('categories','products.category_id', '=', 'categories.id')
            ->join('brands','products.brand_id', '=', 'brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->orderBy('id','desc')
            ->get();
        return view('admin.product.manage-product',[
            'products'=>$products
        ]);
    }

    public function unpublishedProductInfo($id){
        $unpublishedProductInfo = Product::find($id);
        $unpublishedProductInfo->publication_status = 0;
        $unpublishedProductInfo->save();
        return redirect('/product/manage-product')->with('message','Product info unpublished successfully !!');
    }
    public function publishedProductInfo($id){
        $unpublishedProductInfo = Product::find($id);
        $unpublishedProductInfo->publication_status = 1;
        $unpublishedProductInfo->save();
        return redirect('/product/manage-product')->with('message','Product info published successfully !!');
    }
    public function deleteProductInfo($id){
        $deleteProductInfo = Product::find($id);
        @unlink($deleteProductInfo->product_image);
        $uubImages = SubImage::where('sub_images.product_id', '=', $id)->get();
        foreach ($uubImages as $uubImage){
            @unlink($uubImage->product_sub_image);
            $uubImage->delete();
        }
        $deleteProductInfo->delete();
        return redirect('/product/manage-product')->with('message','Product info delete successfully !!');

    }

    public function editProductInfo($id){
        $productById =DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->join('brands','products.brand_id','=','brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')->where('products.id','=', $id)
            ->first();
        $publishedCategories = Category::where('publication_status',1)->get();
        $publishedBrands = Brand::where('publication_status',1)->get();
        $subImages = SubImage::where('sub_images.product_id','=', $id)->get();

        return view('admin.product.edit-product',[
            'product'=>$productById,
            'publishedCategories'=>$publishedCategories,
            'publishedBrands'=>$publishedBrands,
            'subImages'=>$subImages
        ]);

    }
    public function updateProductInfo(Request $request){

        $productById = Product::find($request->product_id);

        @unlink($productById->product_image);

        $subImages = SubImage::where('sub_images.product_id', '=',$productById->id )->get();
        foreach ($subImages as $subImage){
            @unlink($subImage->product_sub_image);
        }

        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory ='product-images/';
        $imageUrl = $directory.$imageName;
        image::make($productImage)->save($imageUrl);

        $productById->product_title = $request->product_title;
        $productById->category_id = $request->category_id;
        $productById->brand_id = $request->brand_id;
        $productById->product_short_description = $request->product_short_description;
        $productById->product_long_description = $request->product_long_description;
        $productById->product_image = $imageUrl;
        $productById->product_price = $request->product_price;
        $productById->publication_status = $request->publication_status;
        $productById->save();
        $productId = $productById->id;

        $productSubImages = $request->file('product_sub_image');

        foreach ($productSubImages as $productSubImage){
            $subImageName  = $productSubImage->getClientOriginalName();
            $subImageDirectory = 'product-sub-images/';
            $subImageUrl = $subImageDirectory.$subImageName;
            image::make($productSubImage)->save($subImageUrl);

            $subImage = new SubImage();
            $subImage->product_id = $productId;
            $subImage->product_sub_image = $subImageUrl;
            $subImage->save();
        }
        return redirect('/product/manage-product')->with('message','Product info update successfully !!');


    }

}
