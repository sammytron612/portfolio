<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $currentId = $request->query('blog_id');
        $query = \App\Models\Blog::with('user')->orderBy('created_at', 'desc');

        if ($currentId) {
            $currentBlog = $query->where('id', $currentId)->first();
        } else {
            $currentBlog = $query->first();
        }

        $nextBlog = null;
        $prevBlog = null;
        if ($currentBlog) {
            $nextBlog = \App\Models\Blog::where('created_at', '>', $currentBlog->created_at)
                ->orderBy('created_at')->first();
            $prevBlog = \App\Models\Blog::where('created_at', '<', $currentBlog->created_at)
                ->orderByDesc('created_at')->first();
        }

        return view('blog.index', [
            'blog' => $currentBlog,
            'nextBlog' => $prevBlog,
            'prevBlog' => $nextBlog,
        ]);
    }


    public function saveBlog(Request $request)
    {
        $request->validate([
            'blog_text' => 'required|string',
            'blog_title' => 'required|string'
        ]);

        $blog = new \App\Models\Blog();
        $blog->blog_text = $request->input('blog_text');
        $blog->blog_title = $request->input('blog_title');
        $blog->user_id = auth()->id() ?? 1; // fallback to user 1 if not logged in
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully!');
    }



}
