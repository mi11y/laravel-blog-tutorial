<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts/index');
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {

        Post::create(request(['title', 'body']));

        return redirect('/');
        
    }

    public function show(Post $post)
    {

        return view('posts/post', ['post' => $post]);
    }
}
