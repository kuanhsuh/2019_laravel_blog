<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store($post_id)
    {
        // dd(request());
        request()->validate([
            'body' => 'required'
        ]);
        $comment = new Comment;
        $comment->body = request('body');
        $comment->post_id = $post_id;
        $comment->save();
        session()->flash('success', 'Comment Added');
        return back();
    }
}
