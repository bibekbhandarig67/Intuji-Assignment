<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogPostCollection;
use App\Http\Resources\BlogPostResource;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogposts = BlogPost::all();

        return new BlogPostCollection($blogposts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogpost = BlogPost::create($request->only([
            'title', 'description', 'category_id'
        ]));

        return new BlogPostResource($blogpost);
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost $blogpost)
    {
        return new BlogPostResource($blogpost);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogpost)
    {
        $blogpost->update($request->only([
            'title', 'description', 'category_id'
        ]));

        return new BlogPostResource($blogpost);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
