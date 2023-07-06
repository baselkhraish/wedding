<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Note;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        $products = Product::all();
        $categories = Category::all();
        $order = Order::where('status','accepted')->get();
        $vendor = Vendor::where('status','accepted')->get();
        $users = User::all();
        return view('admin.index',compact('products','categories','order','vendor','users'));
    }

    function note() {
        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;
        $note = Note::with('vendor')->where('vendor_id',$vendor_id)->orderBy('created_at','desc')->get();
        return view('admin.note',compact('note'));
    }
}
