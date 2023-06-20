<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index() {
        $category = Category::orderBy('created_at','DESC')->where('status','active')->get();
        return view('site.index',compact('category'));
    }

}
