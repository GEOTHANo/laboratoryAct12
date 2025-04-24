<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    // Show all blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.blogs', compact('blogs'));
    }

    // Show form to create a blog
    public function create()
    {
        return view('blogs.index'); // your create form is in blogs.blade.php
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);
    
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'user_id' => Auth::id(), // ✅ Add this line
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }
    

    // Show form to edit a blog
    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        return view('blogs.edit', compact('post'));
    }

    // Update a blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    // Delete a blog (optional)
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
