<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $postsCount = Post::count();
        $usersCount = User::count();

        $posts = Post::with('user')->where('created_at', '>=', now()->today())->latest()->take(5)->get();
        return view('admin.dashboard', compact('postsCount', 'usersCount', 'posts'));
    }
}
