<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    // Display the list of blog posts
    public function index()
    {
        // // Fetch the blogs from the database
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        // // Return the view with the blogs data
        return view('front.blog.blog', compact('blogs'));
        // return view('blog');
    }



    // Show the form to create a new blog post
    public function create(Request $request)
    {
        return view('blog.create');
    }

    // Store a new blog post
    public function store(Request $request)
    {
        return $request;
    }

    public function show($slug)
    {
        // Find the blog post by the slug
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $metaTags = json_decode($blog->meta_tags, true);
        return view('front.blog.show', compact('blog', 'metaTags'));
    }
}
