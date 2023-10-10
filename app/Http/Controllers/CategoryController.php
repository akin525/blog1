<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController
{
    public function indexcreate()
    {
        $cat=Category::all();
        return view('addcat', compact('cat'));
    }
    public function createcat(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'picture'=>'required',
        ]);

        $pic = Storage::put('cat', $request['picture']);
        $insert=Category::create([
            'name'=>$request['name'],
            'picture'=>$pic,
        ]);

        $msg="Category Was Created Successfully";
        Alert::success('Done', $msg);
        return back();

    }

    public function entercat($request)
    {
        $cat=Category::where('id', $request)->first();
        $postc=Post::where('category', $cat->id)->paginate(10);
        $category=Category::get();
        $single=Post::limit(3)->get();
        $post=Post::orderBy('id', 'desc')->limit(4)->get();

        return view('category', compact('postc', 'cat', 'category', 'single', 'post'));
    }

    public function allcategory()
    {
        $category=Category::all();
        return view('allcategory', compact('category'));
    }
    public function editcategory($request)
    {
        $category=Category::where('id', $request)->first();

        return view('editcategory', compact('category'));
    }

    public function updatecategory(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
        ]);
        $category=Category::where('id', $request['id'])->first();
        $category->name=$request['name'];
        $category->save();

        $msg="category Updated";
        Alert::success('Done', $msg);
        return back();

    }
}
