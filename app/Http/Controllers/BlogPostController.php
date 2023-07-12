<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = BlogPost::all();

        return view('blog.index', compact('blogPosts'));
    }

    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);

        return view('blog.show', compact('blogPost'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('blog_images'), $imageName);
            $imagePath = 'blog_images/' . $imageName;
        }

        $blogPost = new BlogPost();
        $blogPost->title = $validatedData['title'];
        $blogPost->content = $validatedData['content'];
        $blogPost->image = $imagePath;
        $blogPost->save();

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully!');
    }

    public function storeComment(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $blogPost = BlogPost::findOrFail($id);
        $blogPost->comments()->create($validatedData);

        return redirect()->route('blog.show', $id)->with('success', 'Comment added successfully!');
    }
}
