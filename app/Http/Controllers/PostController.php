<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PostController
{

    public function loadpostcreate()
    {
        $category=Category::get();
        return view('addpost', compact('category'));
    }
    public function createpost(Request $request)
    {
        $request->validate([
            'category'=>'required',
            'topic'=>'required',
            'content'=>'required',
            'image'=>'required',
        ]);

        $pic = Storage::put('poimg', $request['image']);

        $insert=Post::create([
            'topic'=>$request['topic'],
            'content'=>$request['content'],
            'category'=>$request['category'],
            'image'=>$pic,
        ]);

        $msg="New Post Was Published";
        Alert::success('Done', $msg);
        return back();
    }
    public  function getallpost()
    {
        $allpost=Post::all();

        return view('allpost', compact('allpost'));
    }
}
