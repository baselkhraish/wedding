<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->status === 'admin')
        {
            $vendor = Vendor::with('user','category')->orderby('created_at','desc')->paginate(10);
            return view('admin.vendor.index',compact('vendor'));
        }else{
            return view('errors.notfound');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('errors.notfound');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('errors.notfound');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor_id = $vendor->user_id;
        $user_id = User::where('id',$vendor_id)->first();
        $user_details = UserDetails::where('user_id',$user_id->id)->first();
        return view('admin.vendor.show',compact('vendor','user_details'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor = Vendor::findOrFail($id);
        $user_id = Auth::id();
        $vendor_id = Vendor::where('user_id',$user_id)->first();


        if($vendor->vendor_id === $vendor_id)
        {
            return view('admin.vendor.edit',compact('vendor'));
        }else{
            return view('errors.notfound');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendor=Vendor::findOrFail($id);
        $vendor->update([
            'status'=>$request->status_shop,
        ]);
        $vendor->user->update([
            'status'=>$request->status_seller,
        ]);

        if($request->note == null){

        }else{
        Note::create([
            'vendor_id'=>$vendor->id,
            'note'=>$request->note,
            ]);
        }

        return Redirect::route('admin.vendor.index')->with('success','تم  التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('errors.notfound');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $vendor = Vendor::where('name', 'LIKE', "%{$keyword}%")->get();

        return view('admin.vendor.search-results', ['vendor' => $vendor]);
    }
}
