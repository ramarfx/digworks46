<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function posts(): View
    {
        $posts = Post::with('user')->paginate(15);
        return view('admin.post.index', compact('posts'));
    }

    public function users(): view
    {
        $users = User::paginate(15);

        $karya = [];

        foreach ($users as $user) {
            $karya[$user->id] = Post::where('user_id', $user->id)->count();
        }
        return view('admin.user.index', compact('users', 'karya'));
    }
}
