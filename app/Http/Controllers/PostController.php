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
        session()->flash('success', 'Post was successfully created!');
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
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update($id)
    {
        // dd("THis is update", request());
        $post = Post::find($id)->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        session()->flash('success', 'Post Updated');
        return redirect('/');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('success', 'Post been deleted');
        return redirect('/');
    }
}
