<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }


    public function createBlog(Request $request)
    {
        $request->validate([
            'blog_text' => 'required|string',
        ]);

        $blog = new \App\Models\Blog();
        $blog->blog_text = $request->input('blog_text');
        $blog->user_id = auth()->id() ?? 1; // fallback to user 1 if not logged in
        $blog->save();

        return redirect()->route('blog')->with('success', 'Blog post created successfully!');
    }



}
