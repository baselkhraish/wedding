<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    function order_admin() {
        $order = Order::with('product')->get();
        $order_accepted = Order::with('product')->where('status','accepted')->get();
        $order_pending = Order::with('product')->where('status','pending')->get();
        $order_canceled = Order::with('product')->where('status','canceled')->get();
        return view('admin.order.order-admin',compact('order','order_accepted','order_pending','order_canceled'));
    }

    function order_vendor() {

        $user_id = Auth::id();
        $vendor = Vendor::Where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;

        $order = Order::where('vendor_id',$vendor_id)->get();
        $order_accepted = Order::where('status','accepted')->where('vendor_id',$vendor_id)->get();
        $order_pending = Order::where('status','pending')->where('vendor_id',$vendor_id)->get();
        $order_canceled = Order::where('status','canceled')->where('vendor_id',$vendor_id)->get();

        return view('admin.order.order-vendor',compact('order','order_accepted','order_pending','order_canceled'));
    }

    function order() {
        $order = Order::with('product')->where('user_id',Auth::id())->get();
        $order_accepted = Order::with('product')->where('status','accepted')->where('user_id',Auth::id())->get();
        $order_pending = Order::with('product')->where('status','pending')->where('user_id',Auth::id())->get();
        $order_canceled = Order::with('product')->where('status','canceled')->where('user_id',Auth::id())->get();
        return view('admin.order.order',compact('order','order_accepted','order_pending','order_canceled'));
    }

    function edit($id) {
        $order = Order::with(['product','user','vendor'])->findOrFail($id);
        return view('admin.order.edit',compact('order'));
    }



    function update(Request $request,$id) {
        $order = Order::findOrFail($id);
        $order->update([
            'status'=>$request->status_id,
        ]);
        return Redirect::back()->with('success','تم  التحديث بنجاح');
    }

}
