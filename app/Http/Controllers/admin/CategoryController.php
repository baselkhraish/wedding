<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Exists;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if(Auth::user()->status === 'admin')
        {
            $category= Category::orderBy('id','desc')->paginate(7);
            return view('admin.category.index',compact('category'));
        }else{
            return view('errors.notfound');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->status === 'admin')
        {
        $category = new Category();
        return view('admin.category.create',compact('category'));
        }else{
            return view('errors.notfound');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request->validate([
            'image'=>'required',
        ]);
        $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/images/category/'),$new_image);

        Category::create([
            'user_id'=>Auth::id(),
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
        ]);


        return Redirect::route('admin.category.index')->with('success','تم  إضافة القسم بنجاح');
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
        $category = Category::findOrFail($id);
        if(Auth::id() === $category->user_id)
        {
            return view('admin.category.edit',compact('category'));
        }else{
            return view('errors.notfound');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'image'=> 'nullable',
        ]);

        $new_image = $category->image;
        $del_image = $new_image;

        if($request->hasFile('image')){
            $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/images/categorg/'),$new_image);
            File::delete(public_path('uploads/images/categorg/'.$del_image));
        }

        $category->update([
            'user_id'=>Auth::id(),
            'name' => $request->name,
            'image' => $new_image,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
        ]);

        return Redirect::route('admin.category.index')->with('success','تم  تعديل القسم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::findOrFail($id);
        if(Auth::user()->id === $category->user_id){
            $category->delete();
            return redirect()->back()->with('success','تم الحذف بنجاح');
        }
        else{
            return redirect()->back()->with('success','غير مسموح لك بحذف هذه القسم');
        }
    }



    public function trash()
    {
        $category = category::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('admin.category.trash',compact('category'));
    }



    public function restore(Request $request, $id)
    {
        $category = category::onlyTrashed()->findOrFail($id);
        if(Auth::user()->id === $category->user_id){
            $category->restore();
            return redirect()->route('category.trash')->with('success','تم  استرجاع القسم بنجاح');
        }else{
            return redirect()->route('category.trash')->with('success','لا يمكنك التحكم بهذه القسم');
        }
    }

    public function forceDelete(Request $request, $id)
    {
        $category = category::onlyTrashed()->findOrFail($id);
        if(Auth::user()->id === $category->user_id){
            if(file_exists(public_path('uploads/images/category/'.$category->image))){
                File::delete(public_path('uploads/images/category/'.$category->image));
            }
            $category->forceDelete();
            return redirect()->route('admin.category.trash')->with('success','تم حذف القسم بنجاح');
        }else{
            return redirect()->route('admin.category.trash')->with('success','لا يمكنك التحكم بهذا القسم');
        }
    }
}
