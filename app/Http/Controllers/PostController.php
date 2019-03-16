<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
    }
}
