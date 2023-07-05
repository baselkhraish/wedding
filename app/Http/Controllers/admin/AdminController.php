<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }

    function note() {
        $user_id = Auth::id();
        $vendor = Vendor::where('user_id',$user_id)->first();
        $vendor_id = $vendor->id;
        $note = Note::with('vendor')->where('vendor_id',$vendor_id)->orderBy('created_at','desc')->get();
        return view('admin.note',compact('note'));
    }
}
