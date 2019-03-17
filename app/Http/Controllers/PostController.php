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

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        session()->flash('message', 'Post was successfully created!');
        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return view('posts.show', compact('post'));
        } else {
            session()->flash('error', 'No Post has found');
            return redirect('/');
        }
    }
}
