<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();

        return view('post.user.mypost', compact('posts'));
    }
}
