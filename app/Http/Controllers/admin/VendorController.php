<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->status === 'admin')
        {
            $vendor = Vendor::with('user','category')->orderby('created_at','desc')->paginate(5);
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
        $vendor = new Vendor();
        return view('admin.vendor.create',compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
