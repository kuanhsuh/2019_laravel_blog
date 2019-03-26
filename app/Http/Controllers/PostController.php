<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
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
            'categories' => 'required',
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->user()->id,
        ]);
        foreach (request('categories') as $category) {
            $post->categories()->attach($category);
        }
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
        $categories = Category::all();
        return view('posts.edit', compact(['post', 'categories']));
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
        if (auth()->user() == $post->user) {
            $post->delete();
            $post->categories()->detach();
            session()->flash('success', 'Post been deleted');
        } else {
            session()->flash('error', 'You can only delete your own post');
        }
        return redirect('/');
    }
}
