<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserDetails;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Termwind\Components\Dd;

class SiteController extends Controller
{

    function index() {
        $category = Category::with('vendor')->orderBy('created_at','DESC')->where('status','active')->get();


        return view('site.index',compact('category'));
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
        $vendor = Vendor::with('category')->where('category_id',$category->id)->whereNotNull('name')->get();
        return view('site.category-vendor',compact('vendor','category'));
    }

    function vendor() {
        $vendor = Vendor::orderBy('id','Desc')->whereNotNull('name')->get();
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

        $reservation = Order::orderby('date')->where('product_id',$product->id)->where('status','accepted')->get();

        return view('site.product-detail',compact('product','reservation'));
    }

    function reservation(ReservationRequest $request) {
        // $order = new Order();
        $enteredDate = Carbon::createFromFormat('Y-m-d', $request->input('date'));


            return redirect()->back()->with('success','عذراً , هذا اليوم محجوز مسبقاً');
            if ($enteredDate->isToday()) {
                return redirect()->back()->with('success','عذراً غير مسموح حجز اليوم');
            } elseif ($enteredDate->isFuture()) {
                Order::create([
                    'user_id'=>Auth::id(),
                    'product_id' => $request->product_id,
                    'phone' => $request->phone,
                    'price'=>$request->price,
                ]);
                return redirect()->back()->with('success','تم إرسال طلبك سنتواصل معك قريبا');
            } elseif ($enteredDate->isPast()) {
                return redirect()->back()->with('success','التاريخ قديم');
            } else {
                return redirect()->back()->with('success','يرجى ادخال تاريخ صحيح');

            }


    }


    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Perform the search keyword on your model
        $results = Product::where('id', 'LIKE', "%{$keywword}%")
            ->orWhere('description', 'LIKE', "%{$keywword}%")
            ->first();

        return view('site.search-results', ['results' => $results]);
    }
}
