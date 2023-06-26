<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('errors.notfound');
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
        return view('errors.notfound');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user_id = User::findOrFail($id);
        $user = $user_id->id;

        $setting1 = UserDetails::with('user')->where('user_id',$user)->first();
        $setting2 = Vendor::with('user')->where('user_id',$user)->first();

        // dd($setting2->id);

        if(Auth::id() === $user_id->id){
                return view('admin.setting',compact('setting1','setting2'));
        }else{
            return view('errors.notfound');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image'=>'nullable',
        ]);

        $user_id = User::findOrFail(Auth::id());
        $user = $user_id->id;
        $setting1 = UserDetails::with('user')->where('user_id',$user)->first();


        if (File::exists(public_path('uploads/images/setting/'))) {
            $new_image = $setting1->image;
            $del_image = $new_image;

            if($request->hasFile('image')){
                $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/images/setting/'),$new_image);
                File::delete(public_path('uploads/images/setting/'.$del_image));
            }
        } else {
            $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images/setting/'),$new_image);
        }


        $setting1->update([
            'phone'=>$request->phone,
            'image' => $new_image,
        ]);


        return redirect()->back()->with('success','تم التعديل  بنجاح');
    }

    public function setting(Request $request, string $id)
    {
        $request->validate([
            'image'=>'nullable',
            'category_id'=>'required'
        ]);

        $user_id = User::findOrFail(Auth::id());
        $user = $user_id->id;
        $setting2 = Vendor::with('user')->where('user_id',$user)->first();


        if (File::exists(public_path('uploads/images/vendor/'))) {
            $new_image = $setting2->image;
            $del_image = $new_image;

            if($request->hasFile('image')){
                $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads/images/vendor/'),$new_image);
                File::delete(public_path('uploads/images/vendor/'.$del_image));
            }
        } else {
            $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images/vendor/'),$new_image);
        }


        $setting2->update([
            'phone'=>$request->phone,
            'image' => $new_image,
        ]);


        return redirect()->back()->with('success','تم التعديل  بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('errors.notfound');
    }
}
