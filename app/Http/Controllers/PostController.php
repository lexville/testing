<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();

        return view('posts.show', ['posts' => $posts]);
    }
}
