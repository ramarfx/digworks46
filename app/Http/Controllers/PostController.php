<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    private $validationRules = [
        'title'       => 'required',
        'description' => 'nullable',
        'category'    => 'required',
        'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'link'        => 'url|nullable',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate($this->validationRules);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $path = $file->store('public/posts');
            $validated['image'] = $path;
        }

        $request->user()->posts()->create($validated);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post) : view
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) : View
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
