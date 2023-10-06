<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController
{
    public function commentpost(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'postid'=>'required',
        ]);


        $insert=Comment::create([
            'post_id'=>$request['postid'],
            'name'=>$request['name'],
            'email'=>$request['email'],
            'message'=>$request['message'],
        ]);

        $msg="Comment drop successfully";
        Alert::toast($msg, 'success');
        return back();
    }

    public function allcomment()
    {
        $allc=Comment::all();
        return view('allcomment', compact('allc'));

    }
}
