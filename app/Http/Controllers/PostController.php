<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use Inertia\Inertia;
use App\Models\Post;

class PostController extends BaseController
{
    function index() {
        $posts = PostResource::collection(Post::all());
        return Inertia::render('Index', ['posts' => $posts]);
    }

    function show(Post $post) {
        $post = new PostResource($post);

        return Inertia::render('Show', ['post' => $post]);
    }

    function store(PostRequest $request) {
        Post::firstOrCreate(['title' => $request->input('title')], $request->validated());
    }
}
