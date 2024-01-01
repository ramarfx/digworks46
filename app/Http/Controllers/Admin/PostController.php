<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index() :View
    {
        $posts = Post::with('user')->get();
        return view('admin.post.index', compact('posts'));
    }
}
