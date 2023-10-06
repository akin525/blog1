<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function enteradmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, user is logged in
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with an error message
        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Invalid email or password']);
    }

public function dashboard()
{
    $post=Post::orderBy('id', 'desc')->limit(5)->get();
    $npost=Post::count();
    $category=Category::all();

    return view('dashboard', compact('post', 'category', 'npost'));
}


    public function indexhome()
    {
        $allpost=Post::orderBy('id', 'desc')->paginate(10);
        $post2=Post::inRandomOrder()->orderBy('id', 'desc')->limit(2)->get();
        $post3=Post::orderBy('id', 'desc')->limit(2)->get();
        $post=Post::orderBy('id', 'desc')->limit(1)->get();
        $single=Post::limit(3)->get();
        $category=Category::get();
//        return $post;

        return view('welcome', compact('allpost', 'post', 'post3', 'post2', 'category', 'single'));
    }

    public function detailsindex($request)
    {
        $category=Category::all();
        $details=Post::where('id', $request)->first();
        $post=Post::orderBy('id', 'desc')->limit(4)->get();
        $post1=Post::limit(3)->get();
        $com=Comment::where('post_id',$request)->count();
        $comment=Comment::where('post_id',$request)->get();

        return view('details', compact('details', 'category', 'post', 'post1', 'com', 'comment'));
    }
}
