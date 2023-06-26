<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Exists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if(Auth::user()->status === 'vendor')
        {
            $user_id = Auth::id();
            $vendor = Vendor::where('user_id',$user_id)->first();
            $vendor_id = $vendor->id;
            $products= Product::with('vendor')->orderBy('id','desc')->where('vendor_id',$vendor_id)->paginate(7);
            return view('admin.product.index',compact('products'));
        }else{
            return view('errors.notfound');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->status === 'vendor')
        {
        $product = new Product();
        return view('admin.product.create',compact('product'));
        }else{
            return view('errors.notfound');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request->validate([
            'image'=>'required',
        ]);
        $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/images/product/'),$new_image);

        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;

        Product::create([
            'vendor_id'=>$vendor_id,
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'qty' => $request->qty,
        ]);


        return Redirect::route('admin.product.index')->with('success','تم  إضافة المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        if(Auth::user()->status === 'vendor')
        {
            $user_id = Auth::id();
            $vendor = Vendor::where('user_id',$user_id)->first();
            $vendor_id = $vendor->id;

            if($product->vendor_id === $vendor_id)
            {
                return view('admin.product.edit',compact('product'));
            }else{
                return view('errors.notfound');
            }
        }else{
            return view('errors.notfound');
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'image'=> 'nullable',
        ]);

        $new_image = $product->image;
        $del_image = $new_image;

        if($request->hasFile('image')){
            $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images/product/'),$new_image);
            File::delete(public_path('uploads/images/product/'.$del_image));
        }

        $product->update([
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'qty' => $request->qty,
        ]);

        return Redirect::route('admin.product.index')->with('success','تم  تعديل المنتج بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $product = product::findOrFail($id);

        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;

        if($product->vendor_id === $vendor_id){
            $product->delete();
            return redirect()->back()->with('success','تم الحذف بنجاح');
        }
        else{
            return redirect()->back()->with('success','غير مسموح لك بحذف هذه المنتج');
        }
    }



    public function trash()
    {
        $product = product::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('admin.product.trash',compact('product'));
    }



    public function restore(Request $request, $id)
    {
        $product = product::onlyTrashed()->findOrFail($id);
        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;

        if($product->vendor_id === $vendor_id){
            $product->restore();
            return redirect()->route('admin.product.trash')->with('success','تم  استرجاع المنتج بنجاح');
        }else{
            return redirect()->route('admin.product.trash')->with('success','لا يمكنك التحكم بهذه المنتج');
        }
    }

    public function forceDelete(Request $request, $id)
    {
        $product = product::onlyTrashed()->findOrFail($id);
        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;

        if($product->vendor_id === $vendor_id){
            if(file_exists(public_path('uploads/images/product/'.$product->image))){
                File::delete(public_path('uploads/images/product/'.$product->image));
            }
            $product->forceDelete();
            return redirect()->route('admin.product.trash')->with('success','تم حذف المنتج بنجاح');
        }else{
            return redirect()->route('admin.product.trash')->with('success','لا يمكنك التحكم بهذا المنتج');
        }
    }
}
