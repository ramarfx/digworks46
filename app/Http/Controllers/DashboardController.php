<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all()->count();
        $users = User::all()->count();
        return view('dashboard', compact('posts', 'users'));
    }
}
