<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    function index() {
        $category = Category::with('vendor')->orderBy('created_at','DESC')->where('status','active')->get();

        $product_0 = Category::with(['vendor' => function ($query) {
            $query->inRandomOrder()->take(8);
        },'vendor.product' => function ($query) {
            $query->inRandomOrder();
        }])->get();

        return view('site.index',compact('category','product_0'));
    }

    function category() {
        $category = Category::orderBy('id','Desc')->get();
        return view('site.category',compact('category'));
    }

    function category_product($id) {
        $category = Category::findOrFail($id);
        return view('site.category-product',compact('category'));
    }

    function category_vendor($id) {
        $category = Category::findOrFail($id);
        $vendor = Vendor::with('category')->where('category_id',$category->id)->get();
        return view('site.category-vendor',compact('vendor','category'));
    }

    function vendor() {
        $vendor = Vendor::orderBy('id','Desc')->get();
        return view('site.vendor',compact('vendor'));
    }

    function vendor_product($id) {
        $vendor = Vendor::findOrFail($id);
        return view('site.vendor-product',compact('vendor'));
    }


    function products() {
        $products = Product::with(['vendor','vendor.category'])->inRandomOrder()->get();
        return view('site.products',compact('products'));
    }

    function product_details($id){
        $product = Product::findOrFail($id);
        return view('site.product-detail',compact('product'));
    }

}
