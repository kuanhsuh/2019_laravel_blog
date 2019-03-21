<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store()
    {
      // dd(request());
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'categories' => 'required|not_in:0'
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->user()->id,
        ]);

        $post->categories()->attach(request('categories'));
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
        $post = Post::find($id)->update([
            'title' => request('title'),
            'body' => request('body'),
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
