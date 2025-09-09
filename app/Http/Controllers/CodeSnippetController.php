<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeSnippet;

class CodeSnippetController extends Controller
{
    public function create(Request $request)
    {
        if($request->token != config('app.token')){
            abort(403, 'Unauthorized action.');
        }
        return view('create-snippet');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'nullable|string',
            'code' => 'required|string',
            'type' => 'required|string|max:255',
        ]);

        CodeSnippet::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'code' => $request->input('code'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('snippet.create')->with('success', 'Snippet created successfully!');
    }
}
